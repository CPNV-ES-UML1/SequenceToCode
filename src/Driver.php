<?php

require_once "src/Person.php";
require_once "src/Vehicle.php"
class Driver extends Person {

    private $emailadress;

    public function __construct( string $emailadress) {
        $this->emailadress = $emailadress;
    }

    public function takeVehicle ($vehicle) {

        $vehicles = new Vehicle();
        $allVehicles = $vehicles->getAll();

        foreach ($allVehicles as $allVehicle) {
            if ($allVehicle === $vehicle) {
                return $allVehicle;
            }
            else {
                throw new Exception('Vehicle not available.');
            }
        }
    }
}