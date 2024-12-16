<?php

class Enterprise
{
    private array $drivers = [];

    private array $vehicles = [];

    public function addDriver(Driver $driver): void
    {
        $this->drivers[] = $driver;
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function assignVehicleToDriver(string $chassisNumber, string $driverEmailAddress): void
    {
        // 1.1 Get the driver
        $driver = $this->getDriverByEmailAddress($driverEmailAddress);

        // 1.2 Get the vehicle
        $vehicle = $this->getVehicleByChassisNumber($chassisNumber);

        // 1.3 Ensure the driver takes the vehicle
        $driver->takeAVehicle($vehicle);

        // Assign the vehicle to the driver
        $vehicle->assignDriver($driver);
    }

    private function getDriverByEmailAddress(string $driverEmailAdress): Driver
    {
        foreach ($this->drivers as $driver) {
            if ($driver->getEmailAddress() === $driverEmailAdress) {
                return $driver;
            }
        }
        throw new \Exception("Driver with email $driverEmailAdress not found.");
    }

    private function getVehicleByChassisNumber(string $chassisNumber): Vehicle
    {
        foreach ($this->vehicles as $vehicle) {
            if ($vehicle->getChassisNumber() === $chassisNumber) {
                return $vehicle;
            }
        }
        throw new \Exception("Vehicle with chassis number $chassisNumber not found.");
    }
}
