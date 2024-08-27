<?php

require_once 'Account.php';

class SavingAccount extends Account {
    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        return true;
    }
}

?>