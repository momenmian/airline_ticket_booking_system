<?php

namespace App\Models;

class AddFlight
{
    public $uname = array("83489","2021-09-14","342","ddas","asdas","asfs","20:27:00");
    public $count=0;

    public function addFlight($a, $b, $c, $d, $e, $f, $g){
        $add_array=array();

        array_push($add_array,$a, $b, $c, $d, $e, $f, $g);
        for($i=0; $i<count($add_array); $i++)
        {
            for($j=0; $j<count($this->uname); $j++)
            {
                if($add_array[$i]==$this->uname[$j]){
                    $this->count++;
                }

            }
        }
        if($this->count==7){
            return "added successfully";
        }

    }

}