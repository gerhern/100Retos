<?php 

    namespace App\Classes;

    class VowelReplace{
        
        public $replace =[
            'A', 'a', 'á',
            'E', 'e', 'e',
            'I', 'i', 'i',
            'O', 'o', 'o',
            'U', 'u', 'u'
        ]; 

        public function deleteVowels(String $text){
            
            return str_replace($this->replace, "", $text);
        }

        public function getText($request){

            if($request->text != null){
                return $this->deleteVowels($request->text);
            }else{
                return '';
            }
        }
    }