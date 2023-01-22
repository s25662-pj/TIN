

function OnChange(){
    for(var i = 1; i<=10; i++){
        if(i == 9){
            continue;
        }
        var tutorcard = document.getElementById('tutor' + i);
        var subject = document.getElementById('subjects');
        var levels = document.getElementById('levels');
        console.log(subject.value + "   " + levels.value);
        if(subject.value == "wszystkie" && levels.value == "wszystkie"){
            tutorcard.style.display = null;
            continue;
        }
        
        else if(subject.value == "wszystkie" ){
            if(tutorcard.dataset.level.split(",").includes(levels.value)){
                tutorcard.style.display = null;
            }
            else{
                tutorcard.style.display = "none";
            }
        }
        else if(levels.value == "wszystkie" ){
            if(tutorcard.dataset.subject == subject.value){
                tutorcard.style.display = null;
            }
            else{
                tutorcard.style.display = "none";
            }
        }
        else{
            if(tutorcard.dataset.level.split(",").includes(levels.value) && tutorcard.dataset.subject == subject.value){
                tutorcard.style.display = null;
            }
            else{
                tutorcard.style.display = "none";
            }
        }
        
        
        
        
        
    }
    

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

function OpenSecondModal(){
    $('#demo-1').modal('hide');
    $('#demo-2').modal('show');

}

$('#hehe').submit(function(eventObj) {
    $(this).append('<input type="hidden" name="hours" value="' + selected +'" /> ');
    $(this).append('<input type="hidden" name="tutorID" value="' + tutorID +'" /> ');
    return true;
});