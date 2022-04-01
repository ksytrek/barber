<?php
require_once("../../config/connectdb.php");
require_once("../../config/config.inc.php");



$sql_search = "SELECT *,DATE_FORMAT(re.dateTime_reserve, '%Y-%m-%dT%k:%i:00-05:00') as data_start,DATE_FORMAT(re.dateTime_reserve_end, '%Y-%m-%dT%k:%i:00-05:00') as data_end FROM `reserve` as re INNER JOIN hairstyle as sty ON sty.id_style = re.id_style;";
$resultArray = array();
// "start": "2020-09-12T10:30:00-05:00",
//     "end": "2020-09-12T12:30:00-05:00"
$json_txt = "";

if ($show_tebelig = Database::query($sql_search, PDO::FETCH_ASSOC)) {
    foreach ($show_tebelig  as $row) {

        $new_row = [
            "title"=> $row['name_style'],
            "start"=> $row['data_start'],
            "end"=> $row['data_end'],
        ];

        array_push($resultArray, $new_row);
    }
    $json_txt =  json_encode($resultArray);
} else {
    $json_txt =  json_encode($resultArray);
}

$Afile = "events.json";
$myfile = fopen("../json/" . $Afile, "w") or die("Unable to open file!");
if (fwrite($myfile, $json_txt)) {
    // echo "json_Permission OK";
}
fclose($myfile);
