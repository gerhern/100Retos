
function startRecursive(){
    var count = document.getElementById('count').value;
    var word = document.getElementById('word').value;
    count = count ? count : null;
    word = word ? word : null;

    console.log(count);
    console.log(word);

    if(isEmpty(count) || isEmpty(word)){
        console.log("Los campos no pueden estar vacios");
        document.getElementById('result').innerHTML="Todos los campos deben de estar llenos";
    }else{
        document.getElementById('result').innerHTML="";
        repeat(count, word);
    }
}

function repeat(count, word){

    if(count == 1){
        document.getElementById('result').insertAdjacentHTML("afterbegin", word + " ");
    }else{
        count--;
        this.repeat(count, word);
        document.getElementById('result').insertAdjacentHTML("afterbegin", word + " ");
    }
}

function isEmpty(data){
    if(data == null){
        return true;
    }else{
        return false;
    }
};