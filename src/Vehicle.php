<?php

class Vehicle
{
    private ?Driver $driver = null;

    private string $chassisNumber;

    public function __construct(string $chassisNumber)
    {
        $this->chassisNumber = $chassisNumber;
    }

    public function assignDriver(Driver $driver): void
    {
        if ($this->isAssigned()) {
            throw new \Exception("Vehicle is already assigned to a driver.");
        }
        $this->driver = $driver;
    }

    private function isAssigned(): bool
    {
        return $this->driver !== null;
    }

    public function getChassisNumber(): string
    {
        return $this->chassisNumber;
    }
}
