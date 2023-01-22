<html>
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/head.php"); ?>
<style>
    .grid-container {
      display: grid;
      color: white;
      font-size: 18px;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
      background-color: #7f8fa6;
      padding: 10px;
    }
    .grid-container>* {
        padding: 5px;

    }

    .grid-top {
        padding: 10px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
    }
    
    .cell {
        border-radius: 6px;
        border: 2px solid rgb(0, 0, 0);
        text-align: center;
        width: 100%;
        height: 2em;
        transition: 0.2s;
    }
    .legend-cell{
        width: 10em !important;
        border-radius: 6px;
        border: 2px solid rgb(0, 0, 0);
        text-align: center;
        height: 2em;
        transition: 0.2s;
        color: white;
        margin-bottom:4px;
    }
    
    .b {
        background: rgb(40, 40, 40);
    }
    .b:hover {
        background: black;
    }
    
    .r {
        background: #9b59b6;
    }
    .r:hover {
        background: #8e44ad;
    }
    
    .a {
        background: #2ecc71;
    }
    .a:hover {
        background: #27ae60;
    }
    
    .o {
        background: #0063c7;
    }
    .o:hover {
        background: #004488;
    }

    .w {
        background: rgb(245, 245, 245);
        color: black;
    }
    .w:hover {
        background: rgb(200, 200, 200);
    }
</style>
</head>

<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Haslo: <input type="password" name="pass">
  <input type="submit">
</form>



<?php
$haslo = "TuByloHaslo";







if($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['pass'] == $haslo) {
        echo <<<EOL
        <select name="tutors" id="tutors" onchange="GetHours(this.value)">
    <option value="0">Wybierz korepetytora</option>
    <option value="1">Agnieszka</option>
    <option value="2">Weronika</option>
    <option value="3">Michałek</option>
    <option value="4">Martyna</option>
    <option value="5">Oliwia</option>
    <option value="6">Patrycja</option>
    <option value="7">Amelia</option>
    <option value="8">Gabriela</option>
    <option value="10">Sara</option>
</select>


<div class="row">
    <div class="col-10">
        <div class="grid-container" id="grid">
            <div class="grid-top">Pn</div>
            <div class="grid-top">Wt</div>
            <div class="grid-top">Śr</div>
            <div class="grid-top">Cz</div>
            <div class="grid-top">Pt</div>
            <div class="grid-top">So</div>
            <div class="grid-top">N</div>
        </div>
    </div>
    <div class="col-2">
        <p id="presentColor">Wybrany kolor: </p>
        
        <div class="w legend-cell" onclick="Paint(this, 'w')" style="color: black">
            wolna
        </div>
        <div class="a legend-cell" onclick="Paint(this, 'a')">
            zaakceptowna
        </div>
        <div class="o legend-cell" onclick="Paint(this, 'o')">
            online
        </div>
        <div class="r legend-cell" onclick="Paint(this, 'r')">
            zarezerwowana
        </div>
        <div class="b legend-cell" onclick="Paint(this, 'b')">
            niedostepna
        </div>
        
        <div class="w legend-cell" onclick="Paint(this, '')"  style="color: black; width: 5em !important;">
            nic
        </div>
        
    </div>
    
    
</div>



<script>
var presentLetter = "";
var presentTutor = 0;

function Paint(div, letter){
    presentLetter = letter;
    document.getElementById('presentColor').innerHTML = 'Wybrany kolor: <b>' + letter + '</b>';
    
}


function GetHours(val){
  Delete();
  presentTutor = val;
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "getTimetable.php?nr=" + val;
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
        var day = data[a].WeekDay;
        var orginal = data[a].OrginalType;
        var present = data[a].PresentType;
        var write = data[a].WriteTime;
        var innerDiv = document.createElement('div');
        
        innerDiv.innerHTML = write;
        if(present == ''){
            innerDiv.className = orginal.toLowerCase();
        }
        else {
            innerDiv.className = present.toLowerCase();
        }
        innerDiv.className += " cell";
        innerDiv.onclick = function () {
            Alteeee(this.parentNode.id);
        };
        
        document.getElementById(day + "-" + time).appendChild(innerDiv);
      }
    }
  }
}
function Alteeee(id){
    if(presentLetter == ""){
        return 0;
    }
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "change.php?nr=" + presentTutor + "&day=" + id.split("-")[0] + "&time=" + id.split("-")[1] + "&type=" + presentLetter;
  var asynchronous = true;
  ajax.open(method, url, asynchronous);
  ajax.send();

  ajax.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.responseText);
      console.log(data);
    }
  }
  setTimeout(() => {  GetHours(presentTutor); }, 400);
  
}

function Delete(){
    for(var t = 1; t < 9; t++){
        for(var d = 1; d < 8; d++){
            document.getElementById(d + "-" + t).innerHTML = "";
        }
    }
    
}

for(var t = 1; t < 9; t++){
    for(var d = 1; d < 8; d++){
        var div = document.createElement("div");
        div.id = d + "-" + t;
        //div.innerHTML = d + " " + t;
        document.getElementById("grid").appendChild(div);
    }
}



</script>;
EOL;










    } 
    else {
        echo "Niepoprawne haslo";
    }
}
?>

</body>
</html>


