
function calculate(){
    var hours = 0;
    var minutes = 0;
    var totalMinutes = 0;
    var seconds = 0;
    
    hours = parseInt(document.getElementById('hours').value);
    hours = hours ? hours : 0;

    
    minutes = parseInt(document.getElementById('minutes').value);
    minutes = minutes ? minutes : 0;

    totalMinutes = (hours * 60) + minutes;

    seconds = totalMinutes * 60;



    document.getElementById('result').innerHTML="Hay un total de  " + seconds + " segundos en " + hours + " horas y " + minutes + " minutos";

}