
function startRecursive(){
    var count = document.getElementById('count').value;
    var word = document.getElementById('word').value;
    repeat(count, word);
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