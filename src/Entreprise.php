<?php

class Entreprise {

    private $chassisNumbers = [];
    private $driverEmailadresses = [];

    public function addDriver (Driver $driverEmailadress){
        $this->driverEmailadresses = $driverEmailadress;
    }

    public function addVehicle (Vehicle $chassisNumber){
        $this->chassisNumbers = $chassisNumber;
    }

    public function assignVehicleToDriver (string $chassisNumber, string $driverEmailadress) {
      
        $driver = $this->getDriverByEmailadress($driverEmailadress);
        $vehicle = $this->getVehicleByChassisNumber($chassisNumber);

        $driver->takeVehicle($vehicle);

        $vehicle->setDriver($driver);

        return;
    }

    private function getDriverByEmailadress ($driverEmailadress) {

        foreach ($this->driverEmailadresses as $emailadress) {
            if ($emailadress === $driverEmailadress) {
                return $emailadress;
            }
            else {
                throw new Exception('Driver not found.');
            }
        }
    }

    private function getVehicleByChassisNumber ($chassisNumber) {

        foreach ($this->chassisNumbers as $number) {
            if ($number === $chassisNumber) {
                return $number;
            }
            else {
                throw new Exception('Vehicle not found.');
            }
        }
        return ;
    }
}
