<?php
$speaker = $_REQUEST['speaker'];
$date = $_REQUEST['date'];
$location = $_REQUEST['location'];
$description = $_REQUEST['description'];
$food = $_REQUEST['food'];
$department = $_REQUEST['department'];

$db = mysqli_connect("localhost","root","password","project2");
$sql = "INSERT INTO seminars (date, speaker, description, department, food, location) VALUES(STR_TO_DATE($date,'%d/%m/%Y %h:%i:%s'), $speaker, $description, $department, $food, $location)";
$result = $db->query($sql);

if (!$result) {
   printf("%s\n", $db->error);
   exit();
}


echo $date;


?>