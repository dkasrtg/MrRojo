<?php 
    require_once('./inc/fonction.php');
    $_idp = $_GET['id'];

    $regions = getRegionsByProvince($_idp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/region.css">
    <title>Les regions d' Antananarivo</title>
</head>
<body>
    <div>
        <h1>Les regions d' Antananarivo</h1>
    <table>
        <thead>
            <tr class="head">
                <th>Region</th>
                <th>Nombre de population</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0 ; $i < count($regions) ; $i++) {?>
            <tr>
                <td><?= $regions[$i]['nom']?></td>
                <td><?= $regions[$i]['population']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>