<?php
    $regions = array("Analamanga", "Atsinanana", "Alaotra-Mangoro", "Amoron'i Mania", "Analanjirofo", "Androy", "Anosy", "Atsimo-Andrefana", "Atsimo-Atsinanana", "Atsimo-Atsiny", "Betsiboka", "Boeny", "Bongolava", "Diana", "Haute-Matsiatra", "Ihorombe", "Itasy", "Melaky", "Menabe", "Sava", "Sofia", "Vakinankaratra", "Vatovavy-Fitovinany");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Regions of Madagascar</title>
  <style>
    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    li {
      padding: 5px;
      background-color: #f2f2f2;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <h1>Regions of Madagascar</h1>
  <ul>
    <?php for($i = 0 ; $i < count($regions) ; $i){ ?>
        <li><?= $regions[$i]?></li>
    <?php } ?>
  </ul>
</body>
</html>


