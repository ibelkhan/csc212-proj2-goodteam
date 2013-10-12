<?php
$speaker = $_REQUEST['speaker'];
$date = $_REQUEST['date'];
$location = $_REQUEST['location'];
$description = $_REQUEST['description'];
$food = $_REQUEST['food'];
$department = $_REQUEST['department'];
$time = $_REQUEST['time'];

$db = new PDO('mysql:host=localhost;dbname=project2', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $db->prepare("INSERT INTO seminars(date, time, speaker, description, department, food, location) VALUES(STR_TO_DATE(:date, '%m/%d/%Y'),:time,:speaker,:description,:department,:food,:location)");
$test = array(':date' => $date, ':time' => $time, ':speaker' => $speaker, ':description' => $description, ':department' => $department, ':food'=>$food, ':location'=>$location);
try {
    $stmt->execute($test);
}
catch (PDOException $e) {
    echo $e->getMessage();
}

header( 'Location: http://ec2-54-205-135-226.compute-1.amazonaws.com/index.php' ) ;

// $db = mysqli_connect("localhost","root","password","project2");
// $sql = $db->prepare("INSERT INTO seminars (date, time, speaker, description, department, food, location) VALUES(?,?,?,?,?,?,?)");
// $sql->bind_param('2013-10-20', $time, $speaker, $description, $department, $food, $location);
// $sql->bind_param('2013-10-20', '5:50pm', 'mitchell', 'gfgf', 'fdsafd', 'fdsaf', 'fdsafd');
// $sql->execute();

// echo $date;

// if (!$result) {
//    echo "start";
//    printf("%s\n", $db->error);
//    exit();
// }

// echo "worked";


// echo $date;


?>