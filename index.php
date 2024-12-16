<?php

require_once "src/Entreprise.php";
require_once "src/Driver.php";
require_once "src/Vehicle.php";

try {
    $entreprise = new Entreprise();

    $driver = new Driver("Christian");
    $entreprise->addDriver($driver);

    $vehicle = new Vehicle("VD666");
    $entreprise->addVehicle($vehicle);

    $entreprise->assignVehicleToDriver("Christian","VD666");

} catch (\Throwable $th) {
    //throw $th;
}