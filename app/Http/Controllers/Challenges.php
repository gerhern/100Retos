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


        'day6' => [
            'title'         => 'Calculadora',

            'description'   => '¿Necesitamos nuestra Casio cuando tenemos Python? Yo la verdad todavía amo a mi calculadora de bolsillo, pero también amo hacer programas.El reto del día de hoy es crear una calculadora básica que reemplace a nuestra Casio. Crea un programa que tome un número, un operador, y otro número y realice el cálculo correcto.Ejemplo:```
            calculadora(2, “+”, 2) -> 4
            calculadora(4, “/”, 2) -> 2',

            'url'           => 'https://images.pexels.com/photos/6692907/pexels-photo-6692907.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',

            'alt'           => 'reto6'
        ],


        'day7' => [
            'title'         => 'Piedra Papel o Tijera',

            'description'   => 'Este es un juego en el que nunca fui bueno, pero eso no significa que hacer un programa sea difícil.El reto del día de hoy es escribir un programa que reciba como parámetro “piedra”, “papel”, o “tijera” y determine si ganó el jugador 1 o el jugador 2. Bonus: ¿puedes hacer modificar tu programa para que el ganador sea el que gané 2 de 3 partidas?Ejemplo:```
            ppt(“piedra”, “papel”) ➞ “El ganador es el jugador 2”',

            'url'           => 'https://images.pexels.com/photos/4472822/pexels-photo-4472822.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',

            'alt'           => 'reto7'
        ],

        'day8' => [
            'title'         => 'Volumen de un cilindro',

            'description'   => 'Las matemáticas son base fundamental de la lógica y programación, por eso es importante practicarlas constantemente. Un cilindro es un cuerpo geométrico que requiere de varias fórmulas, aplícalas en un programa que reciba datos como su altura y radio de las bases para mostrar el resultado acotado a un decimal.

            ',

            'url'           => 'https://images.pexels.com/photos/1340188/pexels-photo-1340188.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',

            'alt'           => 'reto8'
        ],

        'day9' => [
            'title'         => 'Numero Secreto',

            'description'   => 'Este es un juego sencillo que trata de adivinar un número aleatorio, el truco está en que no sabes cuál es ese número pero en cada ingresarás un número y sabrás si este es mayor o menor al número secreto. Así que toma en cuenta estas restricciones para intentar adivinar el número y no olvides contar el número de intentos para mostrarlo una vez aciertes.',

            'url'           => 'https://images.pexels.com/photos/5428833/pexels-photo-5428833.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',

            'alt'           => 'reto9'
        ],

        'day10' => [
            'title'         => 'Traductor de Pig Latin',

            'description'   => 'El Pig Latin es una lengua lúdica que consiste en modificar las palabras con base en las siguientes condiciones:

                Si una palabra comienza con sonido de consonante, se pasan todas las consonantes antes de la primer vocal y se agrega la sílaba “ay” al final (comida = omidacay).
                
                Si la palabra inicia con vocal, entonces agrega la sílaba “way” al final (onomatopeya = onomatopeyaway).
                Tu objetivo es crear un programa que reciba un texto y lo traduzca a esta lengua ¿qué resultados obtuviste?',

            'url'           => 'https://images.pexels.com/photos/1605357/pexels-photo-1605357.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',

            'alt'           => 'reto10'
        ],

        'day11' => [
            'title'         => 'Generador de Contraseñas',

            'description'   => 'Un ejercicio que siempre resulta útil para aplicar aleatoriedad es la generación de contraseñas. Básicamente debes crear un string de caracteres al azar tomando en cuenta las siguientes condiciones que el usuario debe poder elegir:

            Longitud de la contraseña.
            Si incluirá minúsculas, mayúsculas, números y caracteres especiales (incluyendo espacios.',

            'url'           => 'https://images.pexels.com/photos/39584/censorship-limitations-freedom-of-expression-restricted-39584.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',

            'alt'           => 'reto11'
        ],

        'day12' => [
            'title'         => 'Proximo Cumpleaños',

            'description'   => 'Muchos lenguajes de programación cuentan con un módulo para manejar tiempo y fechas. Haz uso de este módulo para crear un programa al que le ingreses tu fecha de nacimiento y te diga cuantos días faltan para tu próximo cumpleaños.',

            'url'           => 'https://images.pexels.com/photos/1543762/pexels-photo-1543762.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',

            'alt'           => 'reto12'
        ],
    ];

}
