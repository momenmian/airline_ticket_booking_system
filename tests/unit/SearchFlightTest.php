<?php

class SearchFlightTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
 
    public function testsearchFlight()
    {
        $this->user = new \App\Models\SearchFlight;
        $this->assertEquals( $this->user->searchFlight("83489"),"Flight Found");
    }
 
}