function calculateArea(){
    var height =parseInt(document.getElementById('height').value);
    var base = parseInt(document.getElementById('base').value);

    var result = (height*base)/2;

    var triangle = typeOfTriangle(height, base);

    document.getElementById('result').innerHTML="El area del triangulo es de "+result;
    document.getElementById('triangle').innerHTML="Este es un triangulo "+triangle;

}


function typeOfTriangle(height, base){

    if(base == height){
        
        return "Equilatero";

    }else if(base < height){
        
        return "Isoceles";

    }else{
        
        return "Escaleno";
    }
}