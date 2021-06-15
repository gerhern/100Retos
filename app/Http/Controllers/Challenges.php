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
    ];

}
