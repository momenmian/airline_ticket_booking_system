<?php

class AddFlightTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testaddFlight()
    {
        $this->user = new \App\Models\AddFlight;
        $this->assertEquals( $this->user->addFlight("83489","2021-09-14","342","ddas","asdas","asfs","20:27:00"),"added successfully");

    }
}