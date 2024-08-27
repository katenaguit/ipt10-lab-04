<?php

class Customer {
    private $name;
    private $address;
    private $phoneNumber;

    public function __construct($name, $address, $phoneNumber) {
        $this->name = $name;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }
}

?>