<?php

namespace App\Models; 

class User
{

    public $montly_income;
    public $montly_expense;
    public $montly_savings;
 
    public function setIncomeExpense($income, $expense)
    {
        $this->montly_income=$income;
        $this->montly_expense=$expense;
    }

    public function getSavings(){
        $this->montly_savings=$this->montly_income - $this->montly_expense;
        return $this->montly_savings;
    }
}