<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <title>Korepetycje Młody Albert</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/head.php"); ?>
    <script>var navNumber = 2;
    </script>
    <style>
        .desc-card {
            border: 1px solid rgb(61, 61, 61);
            border-radius: 100px;
            border-right-style: none;
            border-left-style: none;
            max-width: 800px;
        }

        @media only screen and (max-width: 576px) {
            .desc-card {
                border: 1px solid rgb(61, 61, 61);
                border-radius: 20px;
            }
            .modal-lg {
                max-width: 95% !important;
            }
        }

        .abc {
            float: left;
            margin-left: -2px;
            border: black solid 3px;
        }

        .bottom-right {
            position: absolute;
            bottom: -12px;
            right: 50px;
        }

        .circle-icon {
            background: #0061c0;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            text-align: center;
            line-height: 100px;
            vertical-align: middle;
            padding: 30px;
            color: white;
        }
        
        .modal { 
            overflow: auto !important; 
        }

        .form-label{
            margin-top: 10px;
            margin-bottom: 5px !important;
        }

        .cell {
            
            color: white;
            padding: 24px;
            padding-bottom: 0px !important;
            background-color:#2ecc71;
            border: solid white 0px !important;
            border-top-right-radius: 50px !important;
            border-top-left-radius: 50px !important;
            height: calc(100% - 48px);
            
            
        }
        .button {
            border: 0px;
            width:100%;
            background-color: #27ae60;
            color: white;
            padding: 6px 0px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            border-bottom-right-radius: 50px !important;
            border-bottom-left-radius: 50px !important;
            outline: none;
            
        }
        button:hover, button:focus {
            background-color: #27ae60;
            outline: none;
        }
        
        .a{
            margin-bottom: 24px;
        }
        
        .rotate10 {
            width: 80%;
            -webkit-transform: rotate(10deg);
            -moz-transform: rotate(10deg);
            -o-transform: rotate(10deg);
            -ms-transform: rotate(10deg);
            transform: rotate(10deg);
        }
        
    </style>

</head>


<body>

    <div id="header-placeholder"><?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/header.php"); ?></div>
    <div class="container" id="nav-placeholder" style="padding-top: 20px"><?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/nav.php"); ?></div>




    <div class="container shadow" style="padding-top: 20px;">
        
        <h3 class="text-center">Kurs przygotowujący do egzaminu 8-klasisty z języka angielskiego</h3><br>
        <p style="text-align: justify;">Zapraszamy uczniów ostatnich klas szkół podstawowych na kurs przygotowujący do egzaminu z języka angielskiego. Ostatnie dni maja będą dla Was z całą pewnością wielkim wyzwaniem. Chociaż tego egzaminu nie można nie zdać, to jego wynik będzie decydował o Waszej przyszłości. Warto przygotować się do niego jak najlepiej, aby otworzył Wam drzwi do wymarzonych szkół i klas. Pragniemy Wam w tym pomóc.</p>
        <br><br>
        <div class="a">
            <div class="cell">
                <h3>Grupa Księcia Wilhelma</h3>
                <div class="row">
                    <div class="col-8">
                        <p style="text-align: justify;">Każdy kurs to 30 godzin zajęć. Pierwsza grupa zajęć to bloki tematyczne, które pozwalają na solidną powtórkę. Druga grupa, czyli ostatnich 10 spotkań to wspólne rozwiązywanie arkuszy egzaminacyjnych, żeby każdy uczeń pod koniec maja był już zaprzyjaźniony z obowiązującymi na egzaminie zadaniami.</p>
                        <p style="text-align: justify;">Zawsze jesteśmy dostępni dla uczniów już 15 minut przed zajęciami w razie, gdyby w części do samodzielnego przećwiczenia pojawiły się jakieś pytania. Przed każdymi zajęciami uczeń zobowiązany jest do powtórzenia słownictwa z zadanego tematu. Natomiast na zajęciach rozwiązujemy zadania z zakresu gramatyki, funkcji językowych, środków językowych oraz rozumienia tekstów pisanych i tworzenia wypowiedzi pisemnych. Po każdych zajęciach jesteśmy jeszcze dostępni dla uczniów przez kolejne 15 minut w razie dodatkowych pytań, które pojawiłyby się w czasie zajęć. </p>
                        <p style="text-align: justify;">Na zajęciach korzystamy z książki „Teraz egzamin ósmoklasisty” – repetytorium z języka angielskiego. Jest to świetna pozycja, która pozwala na przygotowanie ucznia z każdego zadania, które może pojawić się na egzaminie, wykorzystując jednocześnie poznane słownictwo. </p>
                        <p style="text-align: justify;">Poniżej znajdziecie dokładny plan grupy opracowany przez zespół Młodego Alberta w oparciu o nasze kilkuletnie doświadczenie w prowadzeniu zajęć oraz o własne sposoby nauki. </p> 
                        <p><b>Termin zajęć:</b> czwartek 15:30 – 17:00</p>
                        
                        
                    </div>
                    <div class="col-4">
                        <br><br>
                        <center><img id="image_canv" src="book.jpg" class="rotate10"></center>
                    </div>
                    
                </div>
                
                <center><a href="harmonogramy/a.png" class="text-white font-weight-bold h4">Harmonogram zajęć</a></center><br>
            </div>
            <button class="button" data-toggle="modal" data-target="#demo-1" onclick="group('angielski 8klasisty');"><h3>Zapisz się teraz!</h3></button>
        </div>
    
    
    
        
            
        </div>
        <br>
        <br>
        <div>
            <div class="container">
                <p>Uwaga! W związku z tym, że przygotowujemy uczniów z całego kraju, prosimy zwrócić uwagę na to, że zajęcia odbywają się również w czasie ferii zimowych.</p>
                <p>Na zajęciach pracujemy na naszych autorskich kartach pracy, do których każdy nasz uczeń otrzymuje dostęp w formie pliku pdf. Jeśli jednak uczeń potrzebuje tych materiałów w formie papierowej – prosimy o zaznaczenie tej opcji w formularzu zgłoszeniowym. Materiały zostaną przesłane w ciągu tygodnia za pośrednictwem Poczty Polskiej. Materiały można też odebrać osobiście w siedzibie Młodego Alberta.</p>
                <p>Jeśli jednak nie czujesz się na siłach, żeby brać udział w zdalnych zajęciach grupowych oferujemy również zajęcia indywidualne przygotowujące do egzaminów. Wystarczy, że w zakładce ZAPISY NA ZAJĘCIA wybierzesz opcję zajęć indywidualnych.</p>
    
                <div class="modal fade" id="demo-1" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
                            <div class="modal-header">
                                
                                <h4 class="modal-title">Dane rodzica i ucznia</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form class="g-3 needs-validation" id="hehe" method="post" action="form.php" autocomplete="off" novalidate>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6" style="margin-bottom: 10px">
                                            <div style="text-align: center; margin-bottom: 15px">
                                                <div class="fa-stack fa-5x" style="display: inline-block;">
                                                    <i class="fa fa-circle fa-stack-2x" style="color: #0061c0;"></i>
                                                    <i class="fas fa-user fa-stack-1x" style="color: white;"></i>
                                                </div>
                                            </div>
                                            
                                            <h2 class="text-center">Dane opiekuna:</h2>
                                            <label for="1-1" class="form-label">Imię</label>
                                            <input type="text" class="form-control" id="1-1" name="name1" autocomplete="off" required>
                                            
                                            <label for="1-2" class="form-label">Nazwisko</label>
                                            <input type="text" class="form-control" id="1-2" name="surname1" autocomplete="off" required>

                                            <label for="1-3" class="form-label">Numer telefonu</label>
                                            <input type="tel" class="form-control" id="1-3" name="phone1" autocomplete="off" required>
                                        </div>
                                        <div class="col-md-6" style="margin-bottom: 10px">
                                            <div style="text-align: center; margin-bottom: 15px">
                                                <div class="fa-stack fa-5x" style="display: inline-block;">
                                                    <i class="fa fa-circle fa-stack-2x" style="color: #0061c0;"></i>
                                                    <i class="fas fa-child fa-stack-1x" style="color: white;"></i>
                                                </div>
                                            </div>
                                            <h2 class="text-center">Dane uczestnika:</h2>
                                            <label for="2-1" class="form-label">Imię</label>
                                            <input type="text" class="form-control" id="2-1" name="name2" autocomplete="off" required>
                                            
                                            <label for="2-2" class="form-label">Nazwisko</label>
                                            <input type="text" class="form-control" id="2-2" name="surname2" autocomplete="off" required>

                                            <label for="2-3-1" class="form-label">Data urodzenia</label>
                                            <div class="row">
                                                <div class="col-4" style="padding-right: 5px">
                                                    <input type="number" class="form-control" id="2-3-1" min="1" max="31" placeholder="dzień" name="day" autocomplete="off" required>
                                                </div>
                                                <div class="col-4" style="padding: 0 5px">
                                                    <input type="number" class="form-control" id="2-3-2" min="1" max="12" placeholder="miesiąc" name="month" autocomplete="off" required>
                                                </div>
                                                <div class="col-4" style="padding-left: 5px">
                                                    <input type="number" class="form-control" id="2-3-3" aria-describedby="2-3-3Feedback" min="<?php echo date("Y")-20; ?>" max="<?php echo date("Y")-5; ?>" placeholder="rok" name="year" autocomplete="off" required>
                                                    <div  id="2-3-3Feedback" class="invalid-feedback">
                                                        <?php// echo "Zapisujemy roczniki " . date("Y")-20 . " - " . date("Y")-5; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="3-1" class="form-label">Adres zamieszkania</label>
                                    <div class="row">
                                        <div class="col-4" style="padding-right: 5px">
                                            <input type="text" class="form-control" id="3-1" placeholder="miejscowość" name="city" autocomplete="off" required>
                                        </div>
                                        <div class="col-8" style="padding-left: 5px">
                                            <input type="text" class="form-control" id="3-2" placeholder="nazwa ulicy i numer" name="street" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-8" style="padding-right: 5px">
                                            <label for="4-1" class="form-label">Adres email</label>
                                            <input type="email" class="form-control" id="4-1" name="email" autocomplete="off" required>
                                        </div>
                                        <div class="col-lg-4" style="padding-left: 5px">
                                            Karty pracy w formie:
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" value="elektroniczna" name="radio" id="flexRadioDefault1" required/>
                                              <label class="form-check-label" for="flexRadioDefault1">elektronicznej</label>
                                            </div>
                                            
                                            <!-- Default checked radio -->
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" value="papierowa" name="radio" id="flexRadioDefault2" required/>
                                              <label class="form-check-label" for="flexRadioDefault2">papierowej</label>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <br>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="5" autocomplete="off" required>
                                      <label class="form-check-label" for="flexCheckDefault">
                                        Zapoznałem się z&nbsp;<a href="/zapisy/kursy/Regulamin-kursów-przygotowujących-do-egzaminu.pdf">regulaminem</a>
                                      </label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="mr-auto btn btn-primary" data-toggle="modal" data-target="#demo-1" data-dismiss="modal">Cofnij</button>
                                    <input type="submit" class="btn btn-primary" value="Zapisz się">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




                
                
                
                
                
                
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>

        </div>
    </div>




</body>
<script>
    var groupName = "";
    
    function group(a){
        groupName = a;
        console.log(groupName);
    }
    
    
    (function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()

    
    $('#hehe').submit(function(eventObj) {
        $(this).append('<input type="hidden" name="group" value="' + groupName +'" /> ');
        return true;
    });

</script>

</html>