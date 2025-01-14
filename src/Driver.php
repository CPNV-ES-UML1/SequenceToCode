<?php

include 'Person.php';

class Driver extends Person
{
    private ?Vehicle $currentVehicle = null;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function takeAVehicle(Vehicle $vehicle): void
    {
        if ($this->hasVehicle()) {
            throw new \Exception("Driver is not available");
        }
        $this->currentVehicle = $vehicle;
    }

    private function hasVehicle(): bool
    {
        return $this->currentVehicle !== null;
    }

    public function getEmailAddress(): string
    {
        return $this->email;
    }
}
