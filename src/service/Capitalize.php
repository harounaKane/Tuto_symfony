<?php

namespace App\service;

class Capitalize
{
    public function firstUpper($string){
        return ucfirst(mb_strtolower($string));
    }

}