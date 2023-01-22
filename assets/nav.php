<ul class="nav nav-pills nav-justified" id="mynavigation">
    <li class="nav-item">
        <a class="nav-link" id="nav-link-1" href="http://mlodyalbert.pl/">Główna</a>
    </li>
    <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="nav-link-2" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Opis zajęć
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" id="nav-link-21" href="/opis/indywidualny">Kurs indywidualny</a>
            <a class="dropdown-item" id="nav-link-22" href="/opis/online">Kurs online</a>
            <a class="dropdown-item" id="nav-link-23" href="/opis/grupy">Kurs dla grup</a>
            <a class="dropdown-item" id="nav-link-24" href="/opis/8klasisty">Przygotowanie do egzaminu 8 - klasisty</a>
            <a class="dropdown-item" id="nav-link-25" href="/opis/maturalny">Przygotowanie do egzaminu maturalnego</a>
        </div>
    </li>-->
    <!--<li class="nav-item">
        <a class="nav-link" id="nav-link-10" href="/feriezimowe">❄️Ferie&nbsp;zimowe❄️</a>
    </li>-->
    <li class="nav-item">
        <a class="nav-link" id="nav-link-2" href="/zapisy">Zapisy&nbsp;na&nbsp;zajęcia</a>
    </li>
    <!--<li class="nav-item">
        <a class="nav-link" id="nav-link-9" href="/wakacje">&#9969;&nbsp;Korki&nbsp;letnie&nbsp;&#127802;</a>
    </li>-->
    <li class="nav-item">
        <a class="nav-link" id="nav-link-4" href="/cennik">Cennik</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="nav-link-5" href="/kontakt">Kontakt</a>
    </li>
</ul><br>

<script>
    if (navNumber != 0) {
        document.getElementById("nav-link-" + navNumber).classList.add('active');
    }
    if (navNumber > 20 && navNumber < 30) {
        document.getElementById("nav-link-2").classList.add('active');
    }
</script>