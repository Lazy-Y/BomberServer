<?php
/**
 * Created by PhpStorm.
 * User: EllenWei
 * Date: 11/29/15
 * Time: 4:06 PM
 */

// echo "hello";
// return;

$host = "localhost";//"192.168.43.29";
$username = "root";
$password = "";
$database = "bomberman";
$conn = mysqli_connect($host, $username, $password, $database);

if(mysqli_connect_errno()){
    exit("DB Connection Error: " . mysqli_connect_error());
}
/*
$sql_name = " SELECT username
                FROM gamerecords
";

$sql_points = "SELECT points
                FROM gamerecords";
$sql_kills = "SELECT kills
                FROM gamerecords";
$sql_deaths = "SELECT deaths
                FROM gamerecords";
$sql_time = "SELECT time
            FROM gamerecords";
            */
$sql_all = "SELECT * FROM gamerecords ORDER BY POINTS DESC";
$result_all = mysqli_query($conn, $sql_all);
if (!$result_all)
{
    exit("SQL error " . mysqli_error($conn));
}
while($row = mysqli_fetch_assoc($result_all))
    $test[] = $row; 
echo json_encode($test);
// echo json_encode($result_all);
// $results_name = mysqli_query($conn, $sql_name);
// if(!$results_name){
//     exit("SQL Error: " . mysqli_error($conn));
// }
// $results_points = mysqli_query($conn, $sql_points);
// if(!$results_points){
//     exit("SQL Error: " . mysqli_error($conn));
// }
// $results_kills = mysqli_query($conn, $sql_kills);
// if(!$results_kills){
//     exit("SQL Error: " . mysqli_error($conn));
// }
// $results_deaths = mysqli_query($conn, $sql_deaths);
// if(!$results_deaths){
//     exit("SQL Error: " . mysqli_error($conn));
// }
// $results_time = mysqli_query($conn, $sql_time);
// if(!$results_time){
//     exit("SQL Error: " . mysqli_error($conn));
// }

// echo json_encode($results_name);