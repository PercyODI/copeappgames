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
// 
//