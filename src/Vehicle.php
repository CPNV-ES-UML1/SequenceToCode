<?php

class Vehicle {
    private $chassisNumber = [];
    private $driver = [];

    public function __construct( string $chassisNumber) {
        $this->chassisNumber = $chassisNumber;
    }

    public function getAll() {
        return $this->chassisNumber;
    } 

    public function setDriver($newDriver) {
        return $this->driver = $newDriver;
    } 
}