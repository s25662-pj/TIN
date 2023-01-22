<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/head.php"); ?>
</head>
<style>
    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        background-color: rgb(109, 109, 109);
        padding-right: 2px;
        padding-top: 2px;
        padding-left: 1px;
        padding-bottom: 1px;

    }

    .grid-container>* {
        margin-left: 1px;
        margin-bottom: 1px;
        padding: 5px;
        font-size: 0.95em;

    }


    .grid-top {
        padding: 10px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
    }
    
    .odd {
        background-color: #cbe9ff;
    }

    .even {
        background-color: #81cfff;
    }

    .unavailable {
        border-radius: 6px;
        border: 2px solid rgb(0, 0, 0);
        background: rgb(20, 20, 20);
        text-align: center;
        width: 100%;
        height: 100%;
    }
    
    .reserved {
        border-radius: 6px;
        border: 2px solid rgb(0, 0, 0);
        background: #0063c7;
        text-align: center;
        width: 100%;
        height: 100%;
    }


    .stationary {
        border-radius: 6px;
        border: 3px solid rgb(0, 0, 0);
        background: rgb(245, 245, 245);
        text-align: center;
        width: 100%;
        height: 100%;
        transition: 0.2s;
        color: black;
    }

    .stationary:hover {
        box-shadow: 0 0.3rem 0.6rem rgba(0, 0, 0, 0.35) !important;
        background: rgb(200, 200, 200);
    }

    .chosen {
        border: 3px solid rgb(255, 0, 0) !important;
    }

    .legend {
        width: 0.8fr;
        text-align: center;
        margin-bottom: 8px;
        pointer-events: none;
        font-size: 0.85em;
    }

    @media only screen and (max-width: 992px) {
        .grid-container>* {
            font-size: 0.65em;
        }

    }


    @media only screen and (max-width: 576px) {

        .grid-container>* {
            margin-left: 1px;
            margin-bottom: 1px;
            padding: 4px;
            font-size: 0.55em;
        }

        .grid-top {
            padding: 5px;
        }
    }


    .cards {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        display: grid;
        grid-auto-flow: column;

    }

</style>
<div class="wrapper">
<section class="cards">
    <div class="grid-container">
        <div class="grid-top even" id="1-0">Pn</div>
        <div class="grid-top even" id="2-0">Wt</div>
        <div class="grid-top even" id="3-0">Śr</div>
        <div class="grid-top even" id="4-0">Cz</div>
        <div class="grid-top even" id="5-0">Pt</div>
        <div class="grid-top even" id="6-0">So</div>
        <div class="grid-top even" id="7-0">N</div>
    
        <div class="grid-item odd" id="1-1"></div>
        <div class="grid-item odd" id="2-1"></div>
        <div class="grid-item odd" id="3-1"></div>
        <div class="grid-item odd" id="4-1"></div>
        <div class="grid-item odd" id="5-1"></div>
        <div class="grid-item odd" id="6-1"></div>
        <div class="grid-item odd" id="7-1"></div>
    
        <div class="grid-item even" id="1-2"></div>
        <div class="grid-item even" id="2-2"></div>
        <div class="grid-item even" id="3-2"></div>
        <div class="grid-item even" id="4-2"></div>
        <div class="grid-item even" id="5-2"></div>
        <div class="grid-item even" id="6-2"></div>
        <div class="grid-item even" id="7-2"></div>
    
        <div class="grid-item odd" id="1-3"></div>
        <div class="grid-item odd" id="2-3"></div>
        <div class="grid-item odd" id="3-3"></div>
        <div class="grid-item odd" id="4-3"></div>
        <div class="grid-item odd" id="5-3"></div>
        <div class="grid-item odd" id="6-3"></div>
        <div class="grid-item odd" id="7-3"></div>
    
        <div class="grid-item even" id="1-4"></div>
        <div class="grid-item even" id="2-4"></div>
        <div class="grid-item even" id="3-4"></div>
        <div class="grid-item even" id="4-4"></div>
        <div class="grid-item even" id="5-4"></div>
        <div class="grid-item even" id="6-4"></div>
        <div class="grid-item even" id="7-4"></div>
    
        <div class="grid-item odd" id="1-5"></div>
        <div class="grid-item odd" id="2-5"></div>
        <div class="grid-item odd" id="3-5"></div>
        <div class="grid-item odd" id="4-5"></div>
        <div class="grid-item odd" id="5-5"></div>
        <div class="grid-item odd" id="6-5"></div>
        <div class="grid-item odd" id="7-5"></div>
    
        <div class="grid-item even" id="1-6"></div>
        <div class="grid-item even" id="2-6"></div>
        <div class="grid-item even" id="3-6"></div>
        <div class="grid-item even" id="4-6"></div>
        <div class="grid-item even" id="5-6"></div>
        <div class="grid-item even" id="6-6"></div>
        <div class="grid-item even" id="7-6"></div>
    
        <div class="grid-item odd" id="1-7"></div>
        <div class="grid-item odd" id="2-7"></div>
        <div class="grid-item odd" id="3-7"></div>
        <div class="grid-item odd" id="4-7"></div>
        <div class="grid-item odd" id="5-7"></div>
        <div class="grid-item odd" id="6-7"></div>
        <div class="grid-item odd" id="7-7"></div>
    
        <div class="grid-item even" id="1-8"></div>
        <div class="grid-item even" id="2-8"></div>
        <div class="grid-item even" id="3-8"></div>
        <div class="grid-item even" id="4-8"></div>
        <div class="grid-item even" id="5-8"></div>
        <div class="grid-item even" id="6-8"></div>
        <div class="grid-item even" id="7-8"></div>
    </div>
</section>
</div>

<p class="text-right">Maksymalnie można wybrać 3 godziny</p>
<h5>Legenda</h5>
<div class="row">
    <div class="col-4">
        <div class="stationary legend">Zajęcia dostępne</div>
    </div>
    <div class="col-4">
        <div class="reserved legend" style="color: white;">Zajęcia wstępnie zarezerwowane</div>
    </div>
    <div class="col-4">
        <div class="unavailable legend" style="color: white;">Zajęcia zajęte</div>
    </div>
</div>


<script>


    var selected = [];
    var tutorID = 0;
    function alteeee(child, elementID) {
        if ($(child).hasClass("chosen")) {
            child.classList.remove("chosen");

            var index = selected.indexOf(elementID);
            if (index !== -1) {
                selected.splice(index, 1);
            }
        }
        else if (selected.length < 3) {
            child.className += " chosen";
            selected.push(elementID);
        }

        day = elementID.split("-")[0];
        hours = elementID.split("-")[1];
        
        if(selected.length>0){
            document.getElementById("summary").innerHTML = "Wybranych godzin: " + (selected.length).toString();
            $("#modalbutton1").attr( "disabled", false );
        }
        else {
            document.getElementById("summary").innerHTML = "";
            $("#modalbutton1").attr( "disabled", true );
        }
        var x = document.getElementById("hehe");

    }

    function LoadHours(number) {
        selected = [];
        document.getElementById("summary").innerHTML = "";
        $("#modalbutton1").attr( "disabled", true );

        tutorID = number;
        removeElements();

        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "getTimetable.php?nr=" + tutorID;
        var asynchronous = true;
        ajax.open(method, url, asynchronous);
        ajax.send();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                console.log(data);

                var html = "";
                for (var a = 0; a < data.length; a++) {
                    var time = data[a].Time;
                    var day = data[a].Day;
                    var type = data[a].Type;
                    var write1 = data[a].WriteTime;
                    if(write1.length == 4){
                        var write2 = new Date(new Date("2011-04-20T0" + write1 + ":51.01").getTime() + 55*60*1000);
                    }
                    else {
                        var write2 = new Date(new Date("2011-04-20T" + write1 + ":51.01").getTime() + 55*60*1000);
                    }
                    

                    
                    var write = write1 + "&nbsp;-&nbsp;" + write2.getHours() + ":" + write2.getMinutes();
                    
                    var innerDiv = document.createElement('div');
                    if (type == "W") {
                        innerDiv.className = 'stationary';
                        innerDiv.onclick = function () {
                            alteeee(this, this.parentNode.id);
                        };
                        innerDiv.innerHTML = "<b>" + write + "</b><br>Zajęcia stacjonarne";
                    }
                    else if (type == "O") {
                        innerDiv.className = 'stationary';
                        innerDiv.onclick = function () {
                            alteeee(this, this.parentNode.id);
                        };
                        innerDiv.innerHTML = "<b>" + write + "</b><br>Zajęcia online";
                    }
                    else if (type == "R") {
                        innerDiv.className = 'reserved';
                        innerDiv.innerHTML = "<b>" + write + "</b><br>Zarezerwowany";
                    }
                    else {
                        innerDiv.className = 'unavailable';
                        innerDiv.innerHTML = "&nbsp;<br>&nbsp;";
                    }

                    var element = document.getElementById(day + "-" + time);


                    element.appendChild(innerDiv);
                }
            }
        }

    }
    function removeElements() {
        for (var i = 1; i <= 8; i++) {
            for (var j = 1; j <= 7; j++) {
                try {
                    const parent = document.getElementById(j + "-" + i);
                    while (parent.firstChild) {
                        parent.firstChild.remove();
                    }
                }
                catch {
                    console.log("eeh");
                }

            }
        }
    }



</script>




