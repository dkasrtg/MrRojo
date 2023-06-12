<?php

// Manuelle pour avoir les regions et population dans un province donnée

include "./fonction.php";

$regions = getRegionsByProvince(2);

print_r($regions);