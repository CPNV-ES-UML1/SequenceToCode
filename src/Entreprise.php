<?php

class Entreprise {

    private $chassisNumber;
    private $driverEmailadress;

    public function assignVehicleToDriver ($chassisNumber,$driverEmailadress) {
        $this->chassisNumber = $chassisNumber;
        $this->driverEmailadress = $driverEmailadress;

        return;
    }

    private function getDriverByEmailadress ($driverEmailadress) {
        
        $driver = Driver::findByEmail($driverEmailadress);

        return $driver;
    }

    private function getVehicleByChassisNumber ($chassisNumber) {
        $vehicle = Vehicle::getByChassisNumber($chassisNumber);
        return $vehicle;
    }
}
