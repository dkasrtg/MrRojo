<?php

// Manuelle pour avoir les regions et population dans un province donnée

include "./fonction.php";

$province = getProvinceById(1);

print_r($province);