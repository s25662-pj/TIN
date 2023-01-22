<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <title>Korepetycje Młody Albert</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/head.php"); ?>
    <link rel="stylesheet" href="style.css">
    <script>var navNumber = 2;
    </script>
    
    

</head>


<body>
    
    <div id="header-placeholder"><?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/header.php"); ?></div>
    <div class="container" id="nav-placeholder" style="padding-top: 20px"><?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/nav.php"); ?></div>




    <div class="container shadow" style="padding-top: 20px;">
    
        <h2>Korepetytorzy</h2>
        <br>
        <div class="row" style="border-left: 15px;">
            <div class="col-lg-1"></div>
            <select class="form-control form-control-lg col-lg-3" onchange="OnChange()" name="subjects" id="subjects">
                <option value="wszystkie">wszystkie przedmioty</option>
                <option value="polski">Język polski</option>
                <option value="angielski">Język angielski</option>
                <!--<option value="hiszpanski">Język hiszpański</option>-->
                <option value="matematyka">Matematyka</option>
                <option value="chemia">Chemia</option>
            </select>
            <div class="col-lg-1"></div>
            <select class="form-control form-control-lg col-lg-6" onchange="OnChange()" name="levels" id="levels">
                <option value="wszystkie">wszystkie poziomy nauczania</option>
                <option value="1-3">klasa 1-3 szkoły podstawowej</option>
                <option value="4-6">klasa 4-6 szkoły podstawowej</option>
                <option value="7-8">klasa 7-8 szkoły podstawowej</option>
                <option value="egzamin8">przygotowanie do egzaminu 8-klasisty</option>
                <option value="pppodst">klasy ponadpodstawowe p. podstawowy</option>
                <option value="pproz">klasy ponadpodstawowe p. rozszerzony</option>
                <option value="maturapodst">przygotowanie do matury poziom podstawowy</option>
                <option value="maturaroz">przygotowanie do matury poziom rozszerzony</option>
            </select>
            <div class="col-lg-1"></div>
        </div>
        <br>
        <br>
        <div class="row" style="margin: 8px">
            
            
            <div class="col-lg-6 tutorcard" id="tutor1" data-subject="matematyka" data-level="pppodst,pproz,maturapodst,maturaroz">
                <div class="cell shadow">
                    <div class="row">
                        <div class="col-auto">
                            <img src="images/tutor1.jpg" class="rezerw-img">
                        </div>
                        <div class="col">
                            <h4 class="tutor-name">Agnieszka</h4>
                            <span class="badge badge-primary">Matematyka</span>
                            <p>Od tej głowy wszystko się zaczęło. Od 2011 roku Agnieszka pracuje z dziećmi i młodzieżą, a od 2018 roku jest korepetytorem u Młodego Alberta. W roku szkolnym 2022/ 2023 prowadzi zajęcia z uczniami szkół ponadpodstawowych z bieżącego materiału przerabianego w szkole oraz przygotowania do egzaminu maturalnego na poziomie podstawowym i rozszerzonym.  Nie ma możliwości, żeby pozostawiła jakieś matematyczne zadanie bez odpowiedzi. Najbardziej wymagająca ze wszystkich korepetytorów, dzięki czemu na przestrzeni wszystkich lat każdy maturzysta zdał swój egzamin z matematyki. W wolniejszych chwilach przygotowuje kolejne materiały i zadania dla swoich uczniów, a w zupełnie wolnych chwilach zajmuje się rękodziełem. W ostatnim czasie odkryła też nową miłość do pieczenia ciast i tortów artystycznych. Czasami się zastanawiamy czy Agnieszka w ogóle śpi.</p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary rezerw-button" data-toggle="modal" data-target="#demo-1" onclick="LoadHours(1)">Zarezerwuj teraz!</button>
                </div>
            </div>
            <div class="col-lg-6 tutorcard" id="tutor2" data-subject="matematyka" data-level="1-3,4-6,7-8,egzamin8,pppodst,maturapodst">
                <div class="cell shadow">
                    <div class="row">
                        <div class="col-auto">
                            <img src="images/tutor2.jpg" class="rezerw-img">
                        </div>
                        <div class="col">
                            <h4 class="tutor-name">Weronika</h4>
                            <span class="badge badge-primary">Matematyka</span>
                            <p>Weronika zaczęła swoją przygodę u Młodego Alberta w 2021 roku. W roku szkolnym 2022/2023 prowadzi zajęcia z uczniami szkół podstawowych oraz uczniami szkół ponadpodstawowych na poziomie podstawowym z matematyki. Przygotowuje także maturzystów na poziomie podstawowym i 8-klasistów do ich egzaminów. Jej zmysł planowania i organizacji pozwala uczniom na regularną i bezstresową naukę. Prywatnie jest studentką Uniwersytetu Gdańskiego. Uwielbia (oczywiście) matematykę, książki i muzykę. Każdą ważną chwilę uwiecznia na fotografiach, które są dla niej odskocznią od codziennych obowiązków. Ma ciepły i troskliwy charakter. W przyszłości pragnie zaadoptować psa ze schroniska. Obawiamy się, że może on sporo namieszać w tym zorganizowanym świecie.</p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary rezerw-button" data-toggle="modal" data-target="#demo-1" onclick="LoadHours(2)">Zarezerwuj teraz!</button>
                </div>
            </div>
            
            <div class="col-lg-6 tutorcard" id="tutor3" data-subject="matematyka" data-level="1-3,4-6,7-8,egzamin8,pppodst,maturapodst">
                <div class="cell shadow">
                    <div class="row">
                        <div class="col-auto">
                            <img src="images/tutor3.jpg" class="rezerw-img">
                        </div>
                        <div class="col">
                            <h4 class="tutor-name">Michał</h4>
                            <span class="badge badge-primary">Matematyka</span>
                            <p>Michał jest u Młodego Alberta korepetytorem od 2019 roku. Największy śmieszek z całego zespołu Alberta. Jednak niech Was nie zmyli jego bujna czupryna, bo pod nią wiele szalonych pomysłów. W roku szkolnym 2022/2023 Michał prowadzi zajęcia z matematyki dla uczniów szkół podstawowych  i ponadpodstawowej na poziomie podstawowym. Przygotowuje również uczniów klas 8 do egzaminu z matematyki. Prywatnie umysł ściśle ścisły. Student Polsko-Japońskiej Akademii Technik Komputerowych. Wolne chwile poświęca na doskonalenie umiejętności z zakresu programowania, robotyki i automatyki, ponieważ z tymi dziedzinami wiąże swoją przyszłość. Poza tym jest „prawie zawodowym graczem” – na zajęciach możesz zmierzyć się z Michałem w zadaniach matematycznych a po zajęciach możesz zmierzyć się z nim na przykład w wyścigach samochodowych. Super motywacja do osiągania lepszych wyników!</p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary rezerw-button" data-toggle="modal" data-target="#demo-1" onclick="LoadHours(3)">Zarezerwuj teraz!</button>
                </div>
            </div>
            <div class="col-lg-6 tutorcard" id="tutor4" data-subject="angielski" data-level="1-3,4-6,7-8,egzamin8,pppodst,pproz,maturapodst">
                <div class="cell shadow">
                    <div class="row">
                        <div class="col-auto">
                            <img src="images/tutor4.jpg" class="rezerw-img">
                        </div>
                        <div class="col">
                            <h4 class="tutor-name">Martyna</h4>
                            <span class="badge badge-success">Język Angielski</span>
                            <p>Swoją „adventure” u Młodego Alberta Martyna zaczęła już w 2019 roku. Od tego momentu udało jej się przemienić wiele umysłów, które wcześniej nie lubiły języka angielskiego w takie, które używają go swobodnie. W roku szkolnym 2022/2023 Martyna prowadzi zajęcia z uczniami szkół podstawowych i szkół ponadpodstawowych na poziomie podstawowym.  Jednak na tym nie kończy się jej językowa pasja. Prywatnie jest studentką pedagogiki wczesnoszkolnej i przedszkolnej z językiem angielskim. Jej drugą pasją jest fotografia. Uwielbia zamykać w kadrach chwile swojej rodziny, ale także modeli, którzy uwielbiają z nią pracować. Do swoich uczniów ma ogromną cierpliwość i spokój. Jej celem na nowy rok szkolny jest wprowadzenie nowych metod motywacji, żeby nauka stała się jeszcze bardziej przyjemna i efektywna.</p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary rezerw-button" data-toggle="modal" data-target="#demo-1" onclick="LoadHours(4)">Zarezerwuj teraz!</button>
                </div>
            </div>
            
            <div class="col-lg-6 tutorcard" id="tutor5" data-subject="polski" data-level="1-3,4-6,7-8,egzamin8">
                <div class="cell shadow">
                    <div class="row">
                        <div class="col-auto">
                            <img src="images/tutor5.jpg" class="rezerw-img">
                        </div>
                        <div class="col">
                            <h4 class="tutor-name">Oliwia</h4>
                            <span class="badge badge-warning">Język polski</span>
                            <p>Oliwia u MŁODEGO ALBERTA jest korepetytorką z języka polskiego. W roku szkolnym 2022/2023 prowadzi zajęcia dla uczniów szkół podstawowych z zakresu podstawy programowej realizowanej w szkole oraz z przygotowania uczniów ostatnich klas do egzaminu 8-klasisty. Prywatnie uczennica ostatniego roku Liceum Katolickiego w Tczewie, w klasie o profilu humanistycznym. Uwielbia polską literaturę i rozmowę o niej. Dodatkowo ma niesamowity umysł do nauki języków obcych. Mówi biegle po angielsku i norwesku, przy czym drugiego języka nauczyła się samodzielnie. Uwielbia pracę z dziećmi, animacje i naukę przez zabawę. Kiedy dowiedziała się o możliwości połączenia obu swoich pasji u Młodego Alberta, w oku pojawił się błysk, a w głowie mnóstwo pomysłów na szerzenie wśród młodych osób miłości do języka polskiego.</p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary rezerw-button" data-toggle="modal" data-target="#demo-1" onclick="LoadHours(5)">Zarezerwuj teraz!</button>
                </div>
            </div>
            <div class="col-lg-6 tutorcard" id="tutor6" data-subject="polski" data-level="pppodst,pproz,maturapodst,maturaroz">
                <div class="cell shadow">
                    <div class="row">
                        <div class="col-auto">
                            <img src="images/tutor6.jpg" class="rezerw-img">
                        </div>
                        <div class="col">
                            <h4 class="tutor-name">Patrycja</h4>
                            <span class="badge badge-warning">Język polski</span>
                            <p>Od roku szkolnego 2022/23 Patrycja prowadzi zajęcia z języka polskiego dla uczniów szkół ponadpodstawowych. Realizuje podstawę programową obowiązującą na lekcjach w szkole oraz przygotowuje uczniów ostatnich klas do egzaminów maturalnych na poziomie podstawowym i rozszerzonym.  Uwielbia literaturę. Uwielbia rozmowę o niej. Uwielbia zarażać swoich uczniów miłością do tej pięknej sztuki. Prywatnie jest studentką prawa. Dokształca się również w zakresie terapii zajęciowej. Kiedy pytamy Patrycję co robi w wolnym czasie, pyta czym jest „wolny czas”. Gdybyśmy chcieli napisać czym Patrycja zajmuje się po pracy to prawdopodobnie nie wystarczyłoby na to miejsca w tej ramce. Najwięcej energii poświęca swojej firmie, w której zajmuje się animacjami dla dzieci. W ramach wolontariatu wspiera różne akcje oraz pracuje z osobami niepełnosprawnymi. Cieszy ją każdy uczeń, który pod jej okiem kształci się i osiąga kolejne cele. Takich właśnie ludzi nazywamy „dobrymi korepetytorami”. </p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary rezerw-button" data-toggle="modal" data-target="#demo-1" onclick="LoadHours(6)">Zarezerwuj teraz!</button>
                </div>
            </div>
            
            <div class="col-lg-6 tutorcard" id="tutor7" data-subject="matematyka" data-level="1-3,4-6,7-8,egzamin8">
                <div class="cell shadow">
                    <div class="row">
                        <div class="col-auto">
                            <img src="images/tutor7.jpg" class="rezerw-img">
                        </div>
                        <div class="col">
                            <h4 class="tutor-name">Amelia</h4>
                            <span class="badge badge-primary">Matematyka</span>
                            <p>W roku szkolnym 2022/2023 swoją przygodę rozpoczęła Amelia, która prowadzi zajęcia z matematyki dla uczniów szkoły podstawowej. Realizuje podstawę programową obowiązującą w szkole oraz przygotowuje uczniów ostatnich klas do egzaminu. Prywatnie uczennica ostatniej klasy Liceum Katolickiego, w którym rozszerza matematykę, język angielski i biologię. Właśnie z tym ostatnim przedmiotem Amelia planuje powiązać swoją przyszłość i rozpocząć w przyszłym roku studia na kierunku medycznym. Jednak już teraz zgłębia wszelkie ciekawostki i tajniki ludzkiego ciała. Poza tym interesuje się sportem i psychologią, które oczywiście też mają z ludzkim ciałem wiele wspólnego! Jednak nie martwcie się - jesteście na jej zajęciach całkowicie bezpieczni! </p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary rezerw-button" data-toggle="modal" data-target="#demo-1" onclick="LoadHours(7)">Zarezerwuj teraz!</button>
                </div>
            </div>
            <div class="col-lg-6 tutorcard" id="tutor8" data-subject="matematyka"  data-level="1-3,4-6,7-8,egzamin8,pppodst">
                <div class="cell shadow">
                    <div class="row">
                        <div class="col-auto">
                            <img src="images/tutor8.jpg" class="rezerw-img">
                        </div>
                        <div class="col">
                            <h4 class="tutor-name">Gabriela</h4>
                            <span class="badge badge-primary">Matematyka</span>
                            <p>Gabriela zaczęła swoją przygodę u Młodego Alberta w 2022 roku jako korepetytorka matematyki. Prowadzi zajęcia z uczniami szkół ponadpodstawowych na poziomie podstawowym oraz przygotowuje ich do egzaminu maturalnego. W tym roku Uniwersytet Gdański pozyskał Gabrysię i przyciągną na wydział Matematyki, Fizyki i Informatyki, gdzie będzie kształciła się z zakresu matematyki ogólnej, co zawsze było jej marzeniem i w tym kierunku pragnęła się rozwijać. Umysł ścisły z elementami książek i filmów. W wolnym czasie, kiedy pogoda dopisuje uprawia wszelkiej maści sporty (rower, biegi, siatkówka i jazda konno), a kiedy nie dopisuje lubi czytać książki i oglądać filmy fantastyczno-naukowe i fantasy.</p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary rezerw-button" data-toggle="modal" data-target="#demo-1" onclick="LoadHours(8)">Zarezerwuj teraz!</button>
                </div>
            </div>
            
            <div class="col-lg-6 tutorcard" id="tutor10" data-subject="chemia" data-level="7-8,egzamin8,pppodst,pproz,maturapodst,maturaroz">
                <div class="cell shadow">
                    <div class="row">
                        <div class="col-auto">
                            <img src="images/tutor10.jpg" class="rezerw-img">
                        </div>
                        <div class="col">
                            <h4 class="tutor-name">Sara</h4>
                            <span class="badge badge-warning" style="background-color: #fff200;">Chemia</span>
                            <p>Sara jest korepetytorem u Młodego Alberta od 2022 roku i jako pierwszy korepetytor zdecydowała się na prowadzenie zajęć z chemii. Jednak dla Sary to nie jest tylko przedmiot, który trzeba zaliczyć. Sara to osoba, która chemią żyje. Interesuje się wszelkimi ciekawostkami związanymi z tą dziedziną, chętnie podejmuje próby przeprowadzania doświadczeń i analizy zjawisk chemicznych. Prowadzi zajęcia dla uczniów szkół podstawowych i ponadpodstawowych, w tym przygotowanie do egzaminów maturalnych na poziomie rozszerzonym. Poza naukowymi aspektami chemia jest obecna również w życiu codziennym Sary. Lubi podróże, piesze wędrówki, gdzie ma stały kontakt z przyrodą. Jednak kiedy pragnie zwolnić tempo i uciszyć wszystkie „chemiczne neurony”, maluje pejzaże i portrety. </p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary rezerw-button" data-toggle="modal" data-target="#demo-1" onclick="LoadHours(10)">Zarezerwuj teraz!</button>
                </div>
            </div>
        </div>
        
        
        <!--modal 1-->
        <div class="modal fade" id="demo-1" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
                    <div class="modal-header">
                        <h4 class="modal-title">Plan lekcji</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <?php include("timetable.php"); ?>
                    </div>
                    <div class="modal-footer">
                        <h5 class="mr-auto" id="summary"></h5>
                        <button type="button" id="modalbutton1" class="btn btn-primary" data-dismiss="modal" onclick="OpenSecondModal()" disabled>Dalej</button>
                    </div>
                </div>
            </div>
        </div>
        <!--modal 2-->
        <div class="modal fade" id="demo-2" tabindex="-1">
            <div class="modal-dialog modal-xl">
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
                                                <?php echo "Zapisujemy roczniki " . date("Y")-20 . " - " . date("Y")-5; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <label for="3-1" class="form-label">Poziom nauczania</label>
                            <select class="form-control" id="3-1" name="level" autocomplete="off" required>
                                <option value="no">-----</option>
                                <option value="podstawowa 1">Uczeń 1 klasy szkoły podstawowej</option>
                                <option value="podstawowa 2">Uczeń 2 klasy szkoły podstawowej</option>
                                <option value="podstawowa 3">Uczeń 3 klasy szkoły podstawowej</option>
                                <option value="podstawowa 4">Uczeń 4 klasy szkoły podstawowej</option>
                                <option value="podstawowa 5">Uczeń 5 klasy szkoły podstawowej</option>
                                <option value="podstawowa 6">Uczeń 6 klasy szkoły podstawowej</option>
                                <option value="podstawowa 7">Uczeń 7 klasy szkoły podstawowej</option>
                                <option value="podstawowa 8">Uczeń 8 klasy szkoły podstawowej</option>
                                <option value="przygt. 8-klas">Przygotowanie do egzaminu 8-klasisty</option>
                                <option value="ponadgimn. 1">Uczeń 1 klasy szkoły ponadpodstawowej (ponadgimnazjalnej)</option>
                                <option value="ponadgimn. 2">Uczeń 2 klasy szkoły ponadpodstawowej (ponadgimnazjalnej)</option>
                                <option value="ponadgimn. 3">Uczeń 3 klasy szkoły ponadpodstawowej (ponadgimnazjalnej)</option>
                                <option value="ponadgimn. 4">Uczeń 4 klasy szkoły ponadpodstawowej (ponadgimnazjalnej)</option>
                                <option value="ponadgimn. 5">Uczeń 5 klasy szkoły ponadpodstawowej (ponadgimnazjalnej)</option>
                                <option value="przygt. matura podst.">Przygotowanie do egzaminu maturalnego – poziom podstawowy</option>
                                <option value="przygt. matura rozsz.">Przygotowanie do egzaminu maturalnego – poziom rozszerzony</option>
                            </select>

                            <label for="3-2" class="form-label">Adres zamieszkania</label>
                            <div class="row">
                                <div class="col-4" style="padding-right: 5px">
                                    <input type="text" class="form-control" id="3-2" placeholder="miejscowość" name="city" autocomplete="off" required>
                                </div>
                                <div class="col-8" style="padding-left: 5px">
                                    <input type="text" class="form-control" id="3-3" placeholder="nazwa ulicy i numer" name="street" autocomplete="off" required>
                                </div>
                            </div>
                            <div>
                                <label for="4-1" class="form-label">Adres email</label>
                                <input type="email" class="form-control" id="4-1" name="email" autocomplete="off" required>
                            </div>
                            <br>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="5" autocomplete="off" required>
                              <label class="form-check-label" for="flexCheckDefault">
                                Zapoznałem się z&nbsp;<a href="/zapisy/indywidualne/Regulamin.pdf" target="_blank">regulaminem</a>
                              </label>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="mr-auto btn btn-primary" data-toggle="modal" data-target="#demo-1" data-dismiss="modal">Cofnij</button>
                            <!--<a type="button" class="btn btn-primary" href="form.php">Zapisz się</a>-->
                            <input type="submit" class="btn btn-primary" value="Zapisz się">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script src="script.js"></script>

</body>

</html>