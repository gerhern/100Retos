<?php

namespace App\Http\Controllers;

class Challenges{

    function getDays(){
        return $this->days;
    }


    //atributos de las cards de retos
    public $days = [

        'day1' => [
            'title'         => 'Hola, mundo',

            'description'   => 'Hola Mundo!
                Hola, Mundo! es el programa más básico que puede existir en cualquier lenguaje de programación. Todos recordamos la primera vez que escribimos un Hola, Mundo! y lo satisfactorio que fue.
                El reto del día de hoy es escribir Hola, Mundo!',

            'url'           => 'https://64.media.tumblr.com/04a10e1fe82219a66b8508c7cfb5fcef/3cad482d4658edc1-aa/s1280x1920/c6922e506b106667fd8fb850673ce78ee9156f9c.jpg',

            'alt'           => 'reto1'
        ],


        'day2' => [
            'title'         => 'Area de un triangulo',

            'description'   => '¿Recuerdas tus clases de Geometría?

            Es momento de poner ese conocimiento a la práctica. El área de un triángulo se describe de la siguiente manera: A = (b * h) / 2 .
            
            El reto del día de hoy es escribir un programa que tome la base y la altura como parámetros y calcule el área del triángulo. Bonus: El programa debe determinar si el triángulo es isósceles, equilátero o escaleno.',

            'url'           => 'https://64.media.tumblr.com/12a83cbda5eac79990231efeac713cb4/39799d886bdb291a-0a/s1280x1920/aca23df62a0ba708174d20b1f88e94ed0115145b.png',

            'alt'           => 'reto2'
        ],


        'day3' => [
            'title'         => 'Reloj',

            'description'   => '¿Sabes cuántos segundos hay en 32 horas y 20 minutos? No te preocupes, yo tampoco. Para eso tenemos a las computadoras.
            El reto del día de hoy es escribir un programa que tome como parámetros las horas y los minutos y que nos calcule los segundos. ¿En cuántos lenguajes de programación puedes escribir este programa?',

            'url'           => 'https://64.media.tumblr.com/adac63e150b28e6fc0263edf4791bbce/cdcc59b35f024083-41/s2048x3072/9836bd4fe9a617a61c351de307294a0c06d48136.jpg',

            'alt'           => 'reto3'
        ],


        'day4' => [
            'title'         => 'Repite la palabra',

            'description'   => '¿Sabías que para repetir las mismas instrucciones dentro de un programa podemos utilizar for loops o while loops? ¿Sabías que todo lo que puedes hacer con esas loops lo puedes hacer con recursión?
            El reto del día de hoy es crear un programa que recibe como parámetro un string y la cantidad de veces que queremos repetir ese string y devuelve una cadena con las repeteciones. ¿El twist? Sólo puedes usar una función recursiva (pro tip: no olvides tu caso base).',

            'url'           => 'https://64.media.tumblr.com/861075c6d6c51eb0ecaa60f70495c07c/56881c413bce62bf-98/s2048x3072/ec13e3ac56e5a4407256c5254c9f8cdf2196c5d5.jpg',

            'alt'           => 'reto4'
        ],


        'day5' => [
            'title'         => '¿Necesitamos Vocales?',

            'description'   => '¿Sabías que existen idiomas, como el Hebreo, en donde no existen letras para las vocáles? Lo bueno es que podemos ignorarlas y aún entender lo que está escrito con puras consonantes.
            El reto del día de hoy es eliminar las vocales de un párrafo y tratar de leerlo.',

            'url'           => 'https://images.pexels.com/photos/5361246/pexels-photo-5361246.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',

            'alt'           => 'reto5'
        ],
    ];

}
