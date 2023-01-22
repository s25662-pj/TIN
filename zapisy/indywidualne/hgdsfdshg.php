<?php
if(isset( $_GET['id'])) $id = $_GET['id'];
if(isset( $_GET['z'])) $z = $_GET['z'];
if(isset( $_GET['t'])) $tutorID = $_GET['t'];
include($_SERVER['DOCUMENT_ROOT'] . "/assets/dbconnMlodyAlbert.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if($z=="1"){
  $stmt1 = $conn->prepare("UPDATE `LESSONS` SET `PresentType` = 'A' WHERE `OrderID` = ? AND tutorID = ?");
  $stmt1->bind_param("ii", $id, $tutorID);
  $stmt1->execute();
  $stmt1->close();
  echo "Rezerwacja potwierdzona!";
}
else if ($z=="0"){
  $stmt1 = $conn->prepare("UPDATE `LESSONS` SET `OrderID` = 0, `PresentType` = '' WHERE `OrderID` = ? AND tutorID = ?");
  $stmt1->bind_param("ii", $id, $tutorID);
  $stmt1->execute();
  $stmt1->close();
  echo "Rezerwacja USUNIĘTA!"; 
}
else{
  echo "Coś się stało niedobrego";
  die();
}
$conn->close();

?>
