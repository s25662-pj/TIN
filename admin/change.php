<?php
include($_SERVER['DOCUMENT_ROOT'] . "/assets/dbconnMlodyAlbert.php");

$nr = $_GET['nr']; 
$day = $_GET['day']; 
$time = $_GET['time']; 
$type = $_GET['type']; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($type == "w" || $type == "o" || $type == "b") {
    $stmt = $conn->prepare("UPDATE `LESSONS` SET `OrginalType` = ? , `PresentType` = '' , `OrderID` = 0 WHERE `WeekDay` = ? AND `Time` = ? AND `TutorID` = ?");
    $stmt->bind_param("siii", strtoupper($type), $day, $time, $nr);
    $stmt->execute();
    $stmt->close();
    
    
}
else if($type == "a" || $type == "r" ) {
    $stmt = $conn->prepare("UPDATE `LESSONS` SET `PresentType` = ? WHERE `WeekDay` = ? AND `Time` = ? AND `TutorID` = ?");
    $stmt->bind_param("siii", strtoupper($type), $day, $time, $nr);
    $stmt->execute();
    $stmt->close();
    
    
}



echo "Git!";




$conn->close();

?>