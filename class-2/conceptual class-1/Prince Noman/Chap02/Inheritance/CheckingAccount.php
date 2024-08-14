<?php
require 'Chap02/Inheritance/Account.php';

// [Father]
class CheckingAccount extends Account
{
    public function transfer( $amount )
    {
        echo "Transfering $amount from checking account \n";
    }
}

$checkingAccount = new CheckingAccount();

$checkingAccount->deposite(100);
$checkingAccount->withdraw(50);