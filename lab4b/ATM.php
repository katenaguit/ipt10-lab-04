<?php

class ATM {
    private $location;
    private $bank;

    public function __construct($location, $bank) {
        $this->location = $location;
        $this->bank = $bank;
    }

    public function getLocation() {
        return $this->location;
    }

    public function checkBalance($accountNumber) {
        $account = $this->bank->getAccount($accountNumber);
        return $account ? $account->getBalance() : false;
    }

    public function withdraw($accountNumber, $amount) {
        $account = $this->bank->getAccount($accountNumber);
        if ($account && $account->getBalance() >= $amount) {
            $account->withdraw($amount);
            return true;
        }
        return false;
    }

    public function deposit($accountNumber, $amount) {
        $account = $this->bank->getAccount($accountNumber);
        if ($account) {
            $account->deposit($amount);
            return true;
        }
        return false;
    }
}

?>