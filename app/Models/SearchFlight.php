<?php

namespace App\Models;


class SearchFlight
{
    public $fid = array("1", "2","83489","123456789","1234883","763476834","2147483647","7787823","45345");

    public function searchFlight($f){
        foreach ($this->fid as $value) {
            if ($value == $f) {
                return "Flight Found";
                break;
          }
    
        }
    }
}