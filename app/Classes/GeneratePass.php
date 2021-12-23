<?php

    namespace App\Classes;
    


class GeneratePass{
        
        public static function generateNumber(){

            return random_int(0, 9);
        }

        public static function generateSpecialChar(){

            $chars = ['~', '^', '?', '.', '/', '!', '#', '$', '%', '&', ' '];
            $random = array_rand($chars);
            return $chars[$random];
        }

        public static function generateChar($up = false){

            if($up){
              return strtoupper(chr(rand(ord('a'), ord('z'))));
            }else{
                return chr(rand(ord('a'), ord('z')));
            }
        }

        public static function getChar($type){
            switch($type){
                case 'char':
                    return GeneratePass::generateChar();
                break;
                case 'upChar':
                    return GeneratePass::generateChar(true);
                break;
                case 'specialChar':
                    return GeneratePass::generateSpecialChar();
                break;
                case 'number':
                    return GeneratePass::generateNumber();
                break;
            }
        }

        public static function generatePass($request){
            $result = [];
            $values = ['char'];
            if(!empty($request->upp)){
                array_push($values, 'upChar');
            }
            if(!empty($request->numbers)){
                array_push($values, 'number');
            }
            if(!empty($request->special)){
                array_push($values, 'specialChar');
            }
            for($i = 0; $i< $request->lenght; $i++){
                $type = array_rand($values);
                array_push($result, generatePass::getChar($values[$type]));;
            }
            return implode('',$result);
        }

    }