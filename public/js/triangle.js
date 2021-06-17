function calculateArea(){
    var height = 0;
    var base = 0;
    var result = 0;

    height =parseInt(document.getElementById('height').value);
    height = height ? height : 0;
    console.log(height);
    
    base = parseInt(document.getElementById('base').value);
    base = base ? base : 0;
    console.log(base);

    result = (height*base)/2;

    var triangle = typeOfTriangle(height, base);

    document.getElementById('result').innerHTML="El area del triangulo es de "+result;
    document.getElementById('triangle').innerHTML="Este es un triangulo "+triangle;

}


function typeOfTriangle(height, base){

    if(height == 0 || base == 0){
        return "Invalido";
    }

    if(base === height){
        
        return "Equilatero";

    }else if(base < height){
        
        return "Isoceles";

    }else{
        
        return "Escaleno";
    }
}