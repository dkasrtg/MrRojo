<?php
    include_once("inc/fonction.php");
    $regions = array("Analamanga", "Atsinanana", "Alaotra-Mangoro", "Amoron'i Mania", "Analanjirofo", "Androy", "Anosy", "Atsimo-Andrefana", "Atsimo-Atsinanana", "Atsimo-Atsiny", "Betsiboka", "Boeny", "Bongolava", "Diana", "Haute-Matsiatra", "Ihorombe", "Itasy", "Melaky", "Menabe", "Sava", "Sofia", "Vakinankaratra", "Vatovavy-Fitovinany");
    $provinces = getAllProvince();
    $groups = array_chunk($regions, 5);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Provinces of Madagascar</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/index.css">
</head>
<body>
  <h1>Madagascar` s Provinces</h1>

  <?php 
  foreach($groups as $group){ 
  ?>

    <ul>
      <?php foreach($provinces as $province){ ?>
        <li><?= $province['nom'] ?></li>
      <?php } ?>
    </ul>

  <?php 
    break; 
  }
  ?>


</body>
</html>
