<?php

    namespace App\Classes;

    class PigLatin{

        public $result = [];

        public function getData($request){
            if($request->text != null){
                $words = explode(' ', $request->text);
                foreach($words as $word){
                    if($this->getVowelSound($word)){
                        array_push($this->result, $word.'way');
                    }else{
                        array_push($this->result, $this->changeConsonantWord($word));
                    }
                }
                return implode(' ', $this->result);
            }else{
                return '';
            }
        }


        //cambio de palabra que inician con consonantes
        public function changeConsonantWord(String $word){

            $array = str_split($word);
            $count = count($array);
            $newWord = [];
            for($i = 0; $i < $count; $i++){
                if(!$this->isVowel($array[$i])){
                    array_push($newWord, $array[$i]);
                    unset($array[$i]);
                }else{
                    $result = $array + $newWord;
                    $result = implode('', $result);
                    return $result.'ay';
                }
            }
            return $word;
        }

        //revisamos si eñ sonido inicial de una palabra es una vocal, en caso de que no losea sera consonante
        public function getVowelSound(String $word){
            
            $array = str_split($word);
            $sound = $array[0];
            $vowels = [
                'a', 'e', 'i', 'o', 'u',
                'A', 'E', 'I', 'O', 'U',
                'á', 'é', 'í', 'ó', 'ú',
                'h', 'H' 
            ];

            if(in_array($sound,$vowels)){
                return true;
            }else{
                return false;
            } 
        }

        //revisamos casos especiales de palabras sin vocales como pfff
        public function isVowel(String $word){

            $vowels = [
                'a', 'e', 'i', 'o', 'u',
                'A', 'E', 'I', 'O', 'U',
                'á', 'é', 'í', 'ó', 'ú'
            ];

            if(in_array($word,$vowels)){
                return true;
            }else{
                return false;
            } 
        }

    }