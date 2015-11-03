<?php
//                         games_api.php
            
// The games_api API give database access to the games. The request should be made
// via AJAX, using the following jQuery command

// $.getJSON("api/games_api.php", options, function() {...});

// The options parameter expects a JS object with specific key: value pairs.
// Refer to the following list for possible options

// limit: int $limit                   max number of games you want returned. Default: 1
// offset: int $offset                 how many games to skip. Default: 0
// where_goals: array $goals           only games with goals specified in $goals
// where_tags: array $tags             only games with tags specified in $tags
// where_group: int $groupid           only games played by a specified group   === TODO ===
// where_scout: int $scoutid           only games played by a specified scout   === TODO ===
// show_goals: bool $show_goals        adds a column with a comma separated list of goals a game has. Default: false
// show_tags: bool $show_tags          adds a column with a comma separated list of tags a game has. Default: false
// search_title: string $search        searches for a string pattern in title. Uses '%$search%'.
// search_description: string $search  searches for a string pattern in description. Uses '%$search%'.

header('Content-Type: application/json');
include_once("connect.php");

// String variables for the specific parts of the SQL query
$limit = "LIMIT ";
$offset = "OFFSET ";
$where = "";
$where_used = false;
$join = "";
$join_used = false;
$select = "gameid, title, description, instructions, discussion, icon, createdby ";

// Set flags
$need_tags_join = false;
$need_types_join = false;

// SQL Prepare: bind parameter array
$bind_param_array = array();

// Hard-coded list of possible goals. Might consider doing another database call to get this list
// Might also do the same for possible tags
$allowed_goals = ['communication', 'planning', 'trust', 'teamwork', 'leadership', 'decisionmaking', 'problemsolving', 'selfesteem'];

// The following parse through the options and add to specific parts of the SQL query

// Set limit option

if (isset($_GET['limit'])) {
    $get_limit = (int) $_GET['limit'];
    $limit .= "$get_limit ";
    // $bind_param_array['limit_num'] = $_GET['limit'];
} else {
    // Default is 1
    $limit .= '1 ';
}

// Set offset option
if (isset($_GET['offset'])) {
    $get_offset = (int) $_GET['offset'];
    $offset .= "$get_offset ";
    // $bind_param_array['offset_num'] = $_GET['offset'];
} else {
    // Default is 0
    $offset .= '0 ';
}

// Set where_goals option
if (isset($_GET['where_goals']) and is_array($_GET['where_goals'])) {
    $i = 0;
    foreach($_GET['where_goals'] as $goal) {
        if(in_array($goal, $allowed_goals)) {
            if($where_used == true) {
                $where .= "AND ";
            }
            
            $where .= "typetable.keyword = :typekeyword$i ";
            $bind_param_array["typekeyword$i"] = $goal;
            $i++;
            
            $where_used = true;
            $need_types_join = true;
        }
    }
}

// Set where_tags option
if (isset($_GET['where_tags']) and is_array($_GET['where_tags'])) {
    $i = 0;
    foreach($_GET['where_tags'] as $tag) {
        if($where_used == true) {
            $where .= "AND ";
        }
        
        $where .= "tagtable.keyword = :tagkeyword$i ";
        $bind_param_array["tagkeyword$i"] = $tag;
        $i++;
        
        $where_used = true;
        $need_tags_join = true;
    }
}

// Set show_goals option
if (isset($_GET['show_goals'])) {
    if($_GET['show_goals'] == 'true') {
        $select .= ", GROUP_CONCAT(typetable.keyword SEPARATOR ', ') as goals ";
        $need_types_join = true;
    }
}

// Set show-tags option
if (isset($_GET['show_tags'])) {
    if($_GET['show_tags'] == 'true') {
        $select .= ", GROUP_CONCAT(tagtable.keyword SEPARATOR ', ') as tags ";
        $need_tags_join = true;
    }
}

// Set search_title option
if (isset($_GET['search_title'])) {
    $where .= "game.title LIKE :search_title ";
    $bind_param_array['search_title'] = "%" . $_GET['search_title'] . "%";
    
    $where_used = true;
}

// Set search_title option
if (isset($_GET['search_description'])) {
    $where .= "game.description LIKE :search_description ";
    $bind_param_array['search_description'] = "%" . $_GET['search_description'] . "%";
    
    $where_used = true;
}

// Act on flags
if ($need_types_join == true) {
    $join .= "LEFT OUTER JOIN (SELECT * FROM games_types JOIN game_type USING (typeid)) as typetable USING (gameid) ";
}
if ($need_tags_join == true) {
    $join .= "LEFT OUTER JOIN (SELECT * FROM games_tags JOIN game_tag USING (tagid)) as tagtable USING (gameid) ";
}
if($where_used == true) {
    $where = "WHERE " . $where;
}

// Combines all parts of SQL string into one string. Must remain immediatly 
// before the execute
$sqlStr = "SELECT " . $select . "FROM game " . $join . $where . "GROUP BY gameid " . $limit . $offset;
try {
    $stmt = $db->prepare($sqlStr);
    $stmt->execute($bind_param_array);
    
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $data['SQLstring'] = $sqlStr;
    
    echo json_encode($data);
} catch(PDOException $e) {
    // echo 'ERROR: ' . $e->getMessage();
    echo json_encode(array('ERROR: ' => $e->getMessage(), "SQL Statement" => $sqlStr));
}

?>