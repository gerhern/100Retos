var cont = 0;
var firstNumber = '';
var secondNumber ='';
var display = '';
var operator = '';

function getNumber(value){
    if(cont <= 7){
        display += value;
        document.getElementById('numberBox').value = display;
        cont++;
    }
}

function deleteAll(){
    cont = 0;
    firstNumber = '';
    secondNumber = '';
    display = '';
    operator = '';
    document.getElementById('numberBox').value = '';
}

function getOperator(oper){
    if(operator != ''){
        operator = oper;
    }

    if(display != ''){
        firstNumber = display;
        display = '';
        cont = 0;
        operator = oper;
    }
}

function calculate(){
    secondNumber = display;
    if(firstNumber != '' && secondNumber != ''){
        var result;
        switch(operator){
            case '+':
                result = parseFloat(firstNumber) + parseFloat(secondNumber);
                break;
            case '-':
                result = parseFloat(firstNumber) - parseFloat(secondNumber);
                break;
            case '*':
                result = parseFloat(firstNumber) * parseFloat(secondNumber);
                break;
            case '/':
                result = parseFloat(firstNumber) / parseFloat(secondNumber);
                break;
        }

        document.getElementById('numberBox').value = result;
        cont = 0;
        firstNumber = '';
        secondNumber = '';
        display = '';
        operator = '';
    }
}