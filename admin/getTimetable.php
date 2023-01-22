<?php
include($_SERVER['DOCUMENT_ROOT'] . "/assets/dbconnMlodyAlbert.php");


$nr = $_GET['nr']; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$result = mysqli_query($conn, "SELECT Time, WeekDay, OrginalType, PresentType, WriteTime FROM `LESSONS` WHERE TutorID = " . $nr);
#$result = mysqli_query($conn, "SELECT Time, WeekDay, Type FROM `FERIE` WHERE TutorID = " . $nr);
$data = array();
while ($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}






echo json_encode($data);






$conn->close();

?>