<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
 
    public function testSavings()
    {
        $this->user = new \App\Models\User;
        $this->user->setIncomeExpense(1000,500);
        $this->assertEquals( $this->user->getSavings(),500);
    }
 
}