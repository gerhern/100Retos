
var secretNumber = Math.floor((Math.random() * (20 - 0 + 1)) + 0);
var attempts = 0;
console.log(secretNumber);

function selectNumber(number){
    
    if(number == secretNumber){

        document.getElementById('result').innerHTML='Ganaste!';
        document.getElementById(number).style.backgroundColor = 'green';
    }else{

        document.getElementById(number).style.backgroundColor = 'red';
        attempts++;
        document.getElementById('cont').innerHTML=attempts;
    }
}