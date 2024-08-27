<?php

class Bank {
    private $name;
    private $accounts = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addAccount($account) {
        $this->accounts[$account->getAccountNumber()] = $account;
    }

    public function getAccount($accountNumber) {
        return $this->accounts[$accountNumber] ?? null;
    }

    public function getAccounts() {
        return $this->accounts;
    }

    public function getName() {
        return $this->name;
    }
}

?>