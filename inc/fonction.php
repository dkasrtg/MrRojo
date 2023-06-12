<?php

// Fonction pour avoir la liste des province
function getAllProvince()
{
    $liste[] = ["idProvince" => 1, "nom" => "Antananarivo"];
    $liste[] = ["idProvince" => 2, "nom" => "Mahajanga"];
    $liste[] = ["idProvince" => 3, "nom" => "Fianarantsoa"];
    $liste[] = ["idProvince" => 4, "nom" => "Toamasina"];
    $liste[] = ["idProvince" => 5, "nom" => "Antsiranana"];
    $liste[] = ["idProvince" => 6, "nom" => "Toliara"];

    return $liste;
}

// Pour avoir un province par son Id
function getProvinceById($idProvince)
{
    $provinces = getAllProvince();
    foreach ($provinces as $province) {
        if ($province["idProvince"] == $idProvince) {
            return $province;
        }
    }
    return null;
}

function getAllRegion()
{
    $regions[] = ["idRegion" => 1, "idProvince" => 1, "nom" => "Analamanga", "population" => 230];
    $regions[] = ["idRegion" => 2, "idProvince" => 1, "nom" => "Itasy", "population" => 115];
    $regions[] = ["idRegion" => 3, "idProvince" => 2, "nom" => "Majunga", "population" => 320];
    $regions[] = ["idRegion" => 4, "idProvince" => 2, "nom" => "Grand Plage", "population" => 251];
    $regions[] = ["idRegion" => 5, "idProvince" => 3, "nom" => "Ambositra", "population" => 75];
    $regions[] = ["idRegion" => 6, "idProvince" => 3, "nom" => "Ambatofinandrahana", "population" => 18];
    $regions[] = ["idRegion" => 7, "idProvince" => 4, "nom" => "Tamatave", "population" => 420];
    $regions[] = ["idRegion" => 8, "idProvince" => 4, "nom" => "Manakara", "population" => 310];
    $regions[] = ["idRegion" => 9, "idProvince" => 5, "nom" => "Diego", "population" => 45];
    $regions[] = ["idRegion" => 10, "idProvince" => 5, "nom" => "Suarez", "population" => 68];
    $regions[] = ["idRegion" => 11, "idProvince" => 6, "nom" => "Atsimo", "population" => 397];
    $regions[] = ["idRegion" => 12, "idProvince" => 6, "nom" => "Betroka", "population" => 112];
    return $regions;
}

function getRegionsByProvince($idProvince)
{
    $regions = getAllRegion();
    $resultat = [];
    for ($i=0; $i < count($regions); $i++) { 
        if ($regions[$i]["idProvince"] == $idProvince) {
            $resultat[] = $regions[$i];
        }
    }
    return $resultat;
}