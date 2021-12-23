<?php

    namespace App\Classes;

    class Cylinder{

        public static function getData($request){

            if($request->radius != null && $request->height != null){
                return Cylinder::getVolume($request->radius, $request->height);
            }else{
                return '';
            }
        }

        public static function getVolume($radius, $height){

            $circle = M_PI * (pow($radius, 2)); 
            $volume = $circle * $height;
            $result = number_format($volume, 1);
            if($result < 0){
                return "Altura No Valida";
            }
            return "El volumen del cilindro es de $result u ";
        }

    }