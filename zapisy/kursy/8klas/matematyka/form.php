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
if(isset( $_POST['email'])) $email = $_POST['email'];
if(isset( $_POST['radio'])) $radio = $_POST['radio'];
if(isset( $_POST['group'])) $group = $_POST['group'];


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
if ($email == ''){
    echo "Email cannot be empty.";
    die();
}
if ($radio == ''){
    echo "Radio cannot be empty.";
    die();
}
if ($group == ''){
    echo "Group cannot be empty.";
    die();
}





include($_SERVER['DOCUMENT_ROOT'] . "/assets/dbconnWakacje.php");





$to  = "mlodyalbert.ma@gmail.com";
$subject = 'Potwierdzenie ucznia';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: mlodyalbert.ma@gmail.com' . "\r\n";
$msg =   '<html>';
$msg .= '<body style="color: black">
        <h1 style="color: black">Potrzeba potwierdzenia rezerwacji</h1>
        <h2 style="color: black">Dane opiekuna</h2>
        <h3 style="color: black"><b>Imi?? i nazwisko: </b>' . $name1 . ' ' . $surname1 . '<br>
        <b>Numer telefonu: </b>' . $phone1 . '<br>
        <b>Adres zamieszkania: </b>' . $city . ' ' . $street . '</h3>
        <h2 style="color: black">Dane uczestnika</h2>
        <h3 style="color: black"><b>Imi?? i nazwisko: </b>' . $name2 . ' ' . $surname2 . '<br>
        <b>Data urodzenia: </b>' . $day . '.' . $month . '.' . $year . '</h3>
        <h3><b>Email: </b>' . $email . '</h3>
        <h3><b>Karty pracy: </b>' . $radio . '</h3>
        <h2><b>Nazwa grupy: </b>' . $group . '</h2>
    </body>';
$msg .= '</html>'; 

mail($to, $subject, $msg, $headers); 



$to  = $email;
$subject = 'Korepetycje M??ody Albert';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: mlodyalbert.ma@gmail.com' . "\r\n";
$msg =   '<html>';
$msg .= '<body style="color: black">
        <p>Dzie?? dobry!<br>Ju?? niewiele dzieli nas od tego, ??eby wsp??lnie przygotowa?? si?? do egzaminu! W celu potwierdzenia rezerwacji prosimy o wp??at?? zadatku w wysoko??ci 100z??. Ta kwota zostanie odj??ta od ostatniej wp??aty za kurs. 
        <br><br>Dane do przelewu: 
        <br>ALBERT Agnieszka Czerwi??ska			
        <br>Ul. Kubusia Puchatka 5/ lokal 16, 83-110 Tczew		
        <br>51 1020 4900 0000 8102 3155 0230		
        <br>Tytu?? przelewu: ???KURS??? + Imi?? i nazwisko dziecka
        <br><br>
	    O kolejno??ci zapis??w decyduje kolejno???? wp??at. Po zaksi??gowaniu wp??aty otrzymaj?? Pa??stwo jej potwierdzenie, umow?? oraz informacje jak po????czy?? si?? z nami na zaj??cia.<p>
	    <br><br>
	    <p>Ta wiadomo???? zosta??a wys??ana automatycznie. Prosimy na ni?? nie odpowiada??. W przypadku dodatkowych pyta?? zapraszamy do kontaktu telefonicznego.</p>
        <p>
        <br>Serdecznie pozdrawiam,
        <br>Agnieszka Czerwi??ska, CEO.
        <br>mlodyalbert.pl
        <br>Tel. 609 979 345</p>
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
                <div class="col-md-8"><h2 class="text-center" style="color: white">Rezerwacja przeprowadzona pomy??lnie</h2>
                    <p style="text-align: justify; color: white;">Dzie?? dobry. Dokonali??cie Pa??stwo wst??pnej rezerwacji na kurs przygotowuj??cy do egzaminu. Instrukcj?? kolejnego etapu zapis??w otrzymaj?? Pa??stwo na podany adres e-mail. (Prosz?? pami??ta??, ??e nasz mail m??g?? trafi?? do spamu) 
                    <br>W przypadku przerwania procesu zapis??w, rezerwacja zostanie anulowana w ci??gu 48 godzin.</p>
                    <br><br><br><br>
                    <h2 class="text-center" style="color: white"><a class="btn btn-primary center-block" href="https://mlodyalbert.pl/zapisy/" role="button" style="font-size: 24px">Przejd?? do rezerwacji</a></h2>
                </div>
                <div class="col-md-2"></div>

            
        </div>
            
    </body>
</hmtl>