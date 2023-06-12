<?php
    include_once("inc/fonction.php");
    $provinces = getAllProvince();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Provinces of Madagascar</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/index.css">
</head>
<body>
  <h1>Madagascar` s Provinces</h1>

  

    <ul>
      <?php foreach($provinces as $province){ ?>
        <li><span><?= $province['nom']?></span><a href="region.php?id=<?= $province['idProvince']?>">Details</a></li>
      <?php } ?>
    </ul>




</body>
</html>
