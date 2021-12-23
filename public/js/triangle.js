function calculateArea(){
    var area;
    var height;
    var base;
    var triangle;

    height =parseInt(document.getElementById('height').value);
    height = height ? height : null;
    console.log("La altura es de " + height);
    
    base = parseInt(document.getElementById('base').value);
    base = base ? base : null;
    console.log("La base es de " + base);
    
    if(isEmpty(height) || isEmpty(base) || height < 0 || base < 0){
        
        document.getElementById('area').innerHTML="Todos los campos deben de estar llenos o los datos son invalidos";
        document.getElementById('type_of_triangle').innerHTML="";

    }else{
        
        triangle = typeOfTriangle(height, base);
        area = (base * height)/ 2;
        console.log("El area del triangulo es de " + area);
        
        document.getElementById('area').innerHTML="El area del triangulo es de "+area;
        document.getElementById('type_of_triangle').innerHTML="Este es un triangulo "+triangle;
    }
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

function isEmpty(data){
    if(data == null){
        return true;
    }else{
        return false;
    }
}