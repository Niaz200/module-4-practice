<?php

require 'Chap02/Inheritance/CheckingAccount3.php';

//[Son]
class PremiumCheckingAccount extends CheckingAccount
{
    public $minimumBalance = 10000;
}

$PremiumCheckingAccount = new PremiumCheckingAccount();
echo $PremiumCheckingAccount->minimumBalance . PHP_EOL;

echo $PremiumCheckingAccount->deposite(2000);
echo $PremiumCheckingAccount->withdraw(500);
