<?php

require_once "Entreprise.php";
class Main {

    // Utilisation de la fonctions ?

    private function assignVehicleToDriver ($chassisNumber,$driverEmailadress) {
        $entreprise = new Entreprise();
        $validation = $entreprise->assignVehicleToDriver($chassisNumber,$driverEmailadress);

        if ($validation != null) {
            return "Error";
        } else {
            return;
        }
    }
}