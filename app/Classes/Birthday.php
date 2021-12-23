<?php

    namespace App\Classes;

use Carbon\Carbon;

class Birthday{

        public static function getTimeBirthday($timestamp){

            $today = Carbon::today();
            $today->year('0000');
            $birth = Carbon::parse($timestamp);
            $birth->year('0000');

            if($today->lessThan($birth)){
                $result = $today->diffInDays($birth);
            }else {
                $result = $today->diffInDays($birth);
                $result= ($result-365)*(-1);
            }
            
            return $result;
        }

    }