<?php 

if(isset( $_POST['name1'])) $name1 = $_POST['name1'];
if(isset( $_POST['surname1'])) $surname1 = $_POST['surname1'];
if(isset( $_POST['phone1'])) $phone1 = $_POST['phone1'];
if(isset( $_POST['name2'])) $name2 = $_POST['name2'];
if(isset( $_POST['surname2'])) $surname2 = $_POST['surname2'];
if(isset( $_POST['day'])) $day = $_POST['day'];
if(isset( $_POST['month'])) $month = $_POST['month'];
if(isset( $_POST['year'])) $year = $_POST['year'];
if(isset( $_POST['city'])) $city = $_POST['city'];
if(isset( $_POST['street'])) $street = $_POST['street'];
if(isset( $_POST['hours'])) $hours = $_POST['hours'];
if(isset( $_POST['level'])) $level = $_POST['level'];
if(isset( $_POST['tutorID'])) $tutorID = $_POST['tutorID'];
if(isset( $_POST['email'])) $email = $_POST['email'];


if ($name1 == ''){
    echo "Name cannot be empty.";
    die();
}
if ($surname1 == ''){
    echo "Surname cannot be empty.";
    die();
}
if ($phone1 == ''){
    echo "Phone cannot be empty.";
    die();
}
if ($name2 == ''){
    echo "Name cannot be empty.";
    die();
}
if ($surname2 == ''){
    echo "Surname cannot be empty.";
    die();
}
if ($day == ''){
    echo "day cannot be empty.";
    die();
}
if ($month == ''){
    echo "Month cannot be empty.";
    die();
}
if ($year == ''){
    echo "Year cannot be empty.";
    die();
}
if ($city == ''){
    echo "City cannot be empty.";
    die();
}
if ($street == ''){
    echo "Street cannot be empty.";
    die();
}
if ($hours == ''){
    echo "Hours cannot be empty.";
    die();
}
if ($level == 'no'){
    echo "Uzupełnij rubryka 'poziom nauczania'.";
    die();
}
if ($tutorID == ''){
    echo "tutorID cannot be empty.";
    die();
}
if ($email == ''){
    echo "Email cannot be empty.";
    die();
}



include($_SERVER['DOCUMENT_ROOT'] . "/assets/dbconnMlodyAlbert.php");
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$idd = '';


// prepare and bind
$stmt1 = $conn->prepare("SELECT OrderID FROM LESSONS WHERE LESSONS.WeekDay = ? AND Time = ? AND tutorID = ?");
$stmt1->bind_param("iii", $a, $b, $tutorID);

$stmt2 = $conn->prepare("UPDATE `LESSONS` SET `PresentType` = 'R', `OrderID` = ? WHERE `WeekDay` = ? AND `Time` = ? AND tutorID = ?");
$stmt2->bind_param("iiii", $c, $a, $b,  $tutorID);

$data  = $hours;
$pieces = explode(",", $data);
$c = rand(100000, 999999);

foreach ($pieces as &$value) {
    list($a, $b) = explode("-", $value);
    $stmt1->execute();
    $result1 = $stmt1->get_result();

    while ($row1 = $result1->fetch_assoc()) {
        if($row1['OrderID'] == 0){
            $stmt2->execute();

        }
    }


}


$stmt1->close();
$stmt2->close();
$conn->close();



//$to  = "mlodyalbert.ma@gmail.com";
$to  = "michalsonsiema@gmail.com";
$subject = 'Potwierdzenie ucznia ' + $surname1;

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
// More headers
$headers .= 'From: <mlodyalbert.ma@gmail.com>' . "\r\n";

$msg =   '<html>';
$msg .= '<head>
    <style>
        .guziczki {
            border: none;
            color: white;
            padding: 20px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .czerwien{
            background-color: #e74c3c;
        }
        .czerwien:hover {
            background-color: #c0392b;
        }

        .zielen{
            background-color: #2ecc71;
        }
        .zielen:hover {
            background-color: #27ae60;
        }
    </style>
    </head>
    <body style="color: black">
        <h1 style="color: black">Potrzeba potwierdzenia rezerwacji</h1>
        <h2 style="color: black">Dane opiekuna</h2>
        <h3 style="color: black"><b>Imię i nazwisko: </b>' . $name1 . ' ' . $surname1 . '<br>
        <b>Numer telefonu: </b>' . $phone1 . '<br>
        <b>Adres zamieszkania: </b>' . $city . ' ' . $street . '</h3>
        <h2 style="color: black">Dane uczestnika</h2>
        <h3 style="color: black"><b>Imię i nazwisko: </b>' . $name2 . ' ' . $surname2 . '<br>
        <b>Data urodzenia: </b>' . $day . '.' . $month . '.' . $year . '</h3>
        <b>email: </b>' . $email . '<br>
        <b>Poziom: </b>' . $level . '<br>
        <b>kor: </b>' . $tutorID . '

        <p>Zarezerwowane godziny:</p>';
$hours = explode(",", $hours);
foreach ($hours as &$godzina) {
    $pieces = explode("-", $godzina);
    $msg .='<p> dzien:' . $pieces[0] . ' godzina:' . $pieces[1] . '</p>';
    
}

$msg .= '<div>
            <a class="czerwien" style="border: none; color: white; padding: 20px 40px; text-align: center; text-decoration: none; display: inline-block; font-size: 20px; margin: 4px 2px; cursor: pointer; color: white;" href="https://mlodyalbert.pl/zapisy/indywidualne/hgdsfdshg.php?id=' . $c . '&z=0&t=' . $tutorID . '" _blank >Odrzuć</a>
            <a class="zielen"   style="border: none; color: white; padding: 20px 40px; text-align: center; text-decoration: none; display: inline-block; font-size: 20px; margin: 4px 2px; cursor: pointer; color: white;" href="https://mlodyalbert.pl/zapisy/indywidualne/hgdsfdshg.php?id=' . $c . '&z=1&t=' . $tutorID . '" _blank >Zapisz</a>
        </div>

    </body>';
$msg .= '</html>'; 

mail($to, $subject, $msg, $headers); 


//echo "Git";



//[name1] => fasd
//[surname1] => fads
//[phone1] => sadf
//[name2] => sfad
//[surname2] => sfda
//[day] => 1
//[month] => 1
//[year] => 2006
//[city] => fasd
//[street] => sfda
//[hours] => 2-14,3-16
?>
<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/head.php"); ?>
        <style>
         .btn-grad {background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5  51%, #00d2ff  100%)}
         .btn-grad {
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
          
         
        </style>
    </head>
    <body style="background-image: linear-gradient(to right top, #051937, #002663, #003290, #003bbe, #1241eb);">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><h2 class="text-center" style="color: white">Dziekujemy za wybór Młodego Alberta!</h2>
                                        <p style="color: white">Termin został wstępnie zarezerwowany, oddzwonimy na podany numer w ciągu 48h w celu weryfikacji zgłoszenia.</p>
                                        <br><br><br>
                                        <h2 class="text-center"><a class="btn btn-primary center-block" href="https://mlodyalbert.pl/zapisy/indywidualne" role="button" style="font-size: 24px">Rezerwuj kolejne terminy</a></h2></div>
                <div class="col-md-2"></div>
        </div>
            
    </body>
</hmtl>