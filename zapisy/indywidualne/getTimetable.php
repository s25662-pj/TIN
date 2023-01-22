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




$data_final = array();
foreach ($data as &$value) {
    if($value["PresentType"] == ""){
        $data_final[] = [
            "Time" => $value["Time"],
            "Day" => $value["WeekDay"],
            "Type" => $value["OrginalType"],
            "WriteTime" => $value["WriteTime"],
        ];
    }
    else{
        $data_final[] = [
            "Time" => $value["Time"],
            "Day" => $value["WeekDay"],
            "Type" => $value["PresentType"],
            "WriteTime" => $value["WriteTime"],
        ];
    }

    
}
echo json_encode($data_final);






$conn->close();

?>