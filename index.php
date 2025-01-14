<?php

include 'src/Enterprise.php';
include 'src/Driver.php';
include 'src/Vehicle.php';

try {
    $enterprise = new Enterprise();

    $driver = new Driver("driver1@example.com");
    $enterprise->addDriver($driver);

    $vehicle = new Vehicle("123ABC");
    $enterprise->addVehicle($vehicle);

    $enterprise->assignVehicleToDriver("123ABC", "driver1@example.com");

    echo "Vehicle assigned successfully!";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
