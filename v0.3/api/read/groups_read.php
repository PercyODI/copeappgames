<?php

                            // groups_read.php
// The games_api API give database access to the groups. The request should be made
// via AJAX, using the following jQuery command

// $.getJSON("api/read/groups_read.php", options, function() {...});

// The options parameter expects a JS object with specific key: value pairs.
// Refer to the following list for possible options

// ==== Consider changing default of limit and offset to "" (unlimited returned) ====

// limit: int $limit                max number of groups you want returned. Default: 1
// offset: int $offset              how many groups to skip. Default: 0
// where_groupid: mixed $groupid    Finds groups with specific groupid. Can take an array to find multiple group ids. Not recommended using with limit, offset, or where options.
// where_camp: string $camp         Finds groups with a specific camp.
// where_name: string $name         Finds groups with a specific name.
// where_dateformed: string $date   Finds groups formed on a specific date.
// where_dateformed_range: array(string $date1, string $date2)  Finds groups formed within a range of dates.
// where_scout: int $scoutid        Finds groups with a specific scoutid ===Consider array===
// where_instructor: int $instructorid  Finds groups with a specific instructor ===Consider array===
// where_played_game: int $gameid   Finds groups that have played a specified game
// show_scouts: bool $show          adds a column with a comma separated list of scouts in the group
// show_instructors: bool $show     adds a column with a comma separated list of instructors for the group
// search_name: string $search      searches for a string pattern in name. Uses '%$search%'

header('Content-type: application/json');
include_once("../connect.php");

//String variables for specific parts of the SQL query
$limit = "";
$offset = "";
$where = "";
$join = "";
$select = "groupid, camp, dateformed, lastmodified, name ";

// Set flags
$where_used = false;
$need_scouts_join = false;
$need_instructors_join = false;
$need_games_join = false;

// SQL Prepare: bind parameter array
$bind_param_array = array();

// Set limit option
if(isset($_GET['limit'])) {
    $limit = "LIMIT :limit";
    $bind_param_array['limit'] = (int) $_GET['limit'];
}

// Set offset option
if(isset($_GET['offset'])) {
    $offset = "OFFSET :offset ";
    $bind_param_array['offset'] = (int) $_GET['offset'];
    if(!isset($_GET['limit'])) {
        $limit = "LIMIT 1 ";
    }
}

// Set where_groupid option
if(isset($_GET['where_groupid'])) {
    if($where_used) {
        $where .= "AND ";
    }
    if(is_array($_GET['where_groupid'])) {
        $need_or = false;
        $i = 0;
        foreach($_GET['where_groupid'] as $groupid) {
            if($need_or) {
                $where .= "OR ";
            }
            
            $where .= "cope_group.groupid = :where_groupid$i ";
            $bind_param_array["where_groupid$i"] = $groupid;
            $i++;
            
            $need_or = true;
            $where_used = true;
        }
    } else {
        $where .= "cope_group.groupid = :where_groupid ";
        $bind_param_array["where_groupid"] = $_GET['where_groupid'];
        
        $where_used = true;
    }
}

// Set where_camp option
if(isset($_GET['where_camp'])) {
    if($where_used) {
        $where .= "AND ";
    }
    $where .= "cope_group.camp = :where_camp ";
    $bind_param_array['where_camp'] = $_GET['where_camp'];
    $where_used = true;
}

// Set where_name option
if(isset($_GET['where_name'])) {
    if($where_used) {
        $where .= "AND ";
    }
    $where .= "cope_group.name = :where_name ";
    $bind_param_array['where_name'] = $_GET['where_name'];
    $where_used = true;
}

// Set where_dateformed option
if(isset($_GET['where_dateformed'])) {
    
}

// Set where_dateformed_range option
if(isset($_GET['where_dateformed_range'])) {
    
}

// Set where_scout option
if(isset($_GET['where_scout'])) {
    if($where_used) {
        $where .= "AND ";
    }
    $where = "scouttable.scoutid = :where_scoutid ";
    $bind_param_array['where_scoutid'] = $_GET['where_scout'];
    
    $where_used = true;
    $need_scouts_join = true;
}

// Set where_instructor option
if(isset($_GET['where_instructor'])) {
    if($where_used) {
        $where .= "AND ";
    }
    $where = "instructortable.instructorid = :where_instructorid ";
    $bind_param_array['where_instructorid'] = $_GET['where_instructor'];
    
    $where_used = true;
    $need_instructors_join = true;
}

// Set where_played_game option
if(isset($_GET['where_played_game'])) {
    if($where_used) {
        $where .= "AND ";
    }
    $where = "gametable.gameid = :where_gameid ";
    $bind_param_array['where_gameid'] = $_GET['where_played_game'];
    
    $where_used = true;
    $need_games_join = true;
}

// Set show_scouts option
if(isset($_GET['show_scouts'])) {
    if($_GET['show_scouts'] == 'true') {
        $select .= ", GROUP_CONCAT(DISTINCT CONCAT(scouttable.fname, ' ', scouttable.lname)) as scoutnames, GROUP_CONCAT(scouttable.scoutid) as scoutids ";
        $need_scouts_join = true;
    }
}

// Set show_instructors option
if(isset($_GET['show_instructors'])) {
    if($_GET['show_instructors'] == 'true') {
        $select .= ", GROUP_CONCAT(DISTINCT CONCAT(instructortable.fname, ' ', instructortable.lname)) as instructornames, GROUP_CONCAT(instructortable.instructorid) as instructorids ";
        $need_instructors_join = true;
    }
}

// Set search_name option
if(isset($_GET['search_name'])) {
    $search_name_like = '%' . $_GET['search_name'] . '%';
    $where .= "cope_group.name LIKE :where_search_name ";
    $bind_param_array["where_search_name"] = $search_name_like;
    
    $where_used = true;
}


// Act on flags
if ($need_scouts_join) {
    $join .= "LEFT OUTER JOIN (SELECT * FROM scouts_groups JOIN scout USING (scoutid)) as scouttable USING (groupid) ";
}
if ($need_games_join) { 
    $join .= "LEFT OUTER JOIN (SELECT * FROM groups_games JOIN game USING (gameid)) as gametable USING (groupid) ";
}
if ($need_instructors_join) {
    $join .= "LEFT OUTER JOIN (SELECT * FROM groups_instructors JOIN instructor USING (instructorid)) as instructortable USING (groupid) ";
}
if($where_used == true) {
    $where = "WHERE " . $where;
}

// Combines all parts of SQL string into one string. Must remain immediatly 
// before the execute
$sqlStr = "SELECT " . $select . "FROM cope_group " . $join . $where . "GROUP BY groupid " . $limit . $offset;
try {
    $stmt = $db->prepare($sqlStr);
    $stmt->execute($bind_param_array);
    
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $data['numrows'] = count($data);
    $data['SQLstring'] = $sqlStr;
    
    echo json_encode($data);
} catch(PDOException $e) {
    // echo 'ERROR: ' . $e->getMessage();
    echo json_encode(array('ERROR: ' => $e->getMessage(), "SQL Statement" => $sqlStr));
}