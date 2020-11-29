<!DOCTYPE php>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="img/icon.png" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Azur Lane - List of Ships</title>
    </head>


    <?php

    $_POST["Order"] = 'Rarity';
    $_POST["Order_Type"] = 'DESC';

    $ID=0;
        try{

$BDD = new PDO('mysql:host=localhost; dbname=azurlane; charset=utf8','AzurLane', 'azurlane');

$Result = $BDD->query('SELECT * FROM Characters ORDER BY '.$_POST["Order"].' '.$_POST["Order_Type"].'');

}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}

?>


    <body>

        <?php include("Header.php"); ?>

        <div class="contenu">

            <div class="characters">

                <table>
                    <thead>
                        <tr>
                            <td class="H_ID">ID</td>
                            <td class="H_ShipName">Ship name</td>
                            <td class="H_Rarity">Rarity</td>
                            <td class="H_TypeOfShip">Type of ship</td>
                            <td class="H_Affiliation">Affiliation</td>
                            <td class="H_Firepower">Firepower</td>
                            <td class="H_Health">Health</td>
                            <td class="H_AntiAir">Anti-Air</td>
                            <td class="H_Evasion">Evasion</td>
                            <td class="H_Aviation">Aviation</td>
                            <td class="H_Torpedo">Torpedo</td>
                        </tr>
                    </thead>


<?php 
 
        while ( $Data = $Result->fetch() )   
        {  $ID++;
            switch($Data["Rarity"]){
                case 5: $Data["Rarity"] = 'Ultra Rare';
            break;
                case 4: $Data["Rarity"] = 'Super Rare';
            break;
                case 3: $Data["Rarity"] = 'Elite';
            break;
                case 2: $Data["Rarity"] = 'Rare';
            break;
                case 1: $Data["Rarity"] = 'Common';
            break;

            default: $Data["Rarity"] = 'None';
            }
?>

                    <tr>
                        <td class="ID"><?php echo($ID) ?></td>
                        <td class="ShipName"><?php echo $Data["ShipName"]; ?></td>
                        <td class="Rarity"><?php echo $Data["Rarity"]; ?></td>
                        <td class="TypeOfShip"><?php echo $Data["TypeOfShip"]; ?></td>
                        <td class="Affiliation"><?php echo $Data["Affiliation"]; ?></td>
                        <td class="Firepower"><?php echo $Data["Firepower"]; ?></td>
                        <td class="Health"><?php echo $Data["Health"]; ?></td>
                        <td class="AntiAir"><?php echo $Data["AntiAir"]; ?></td>
                        <td class="Evasion"><?php echo $Data["Evasion"]; ?></td>
                        <td class="Aviation"><?php echo $Data["Aviation"]; ?></td>
                        <td class="Torpedo"><?php echo $Data["Torpedo"]; ?></td>
                    </tr>


<?php

}
$Result->closeCursor();

?>


                </table>

            </div>

        </div>

        <div class="Footer">

        <p>Copyright 0ver_Draw 2020-2030    Source : azurlane.koumakan.jp</p>

        </div>

    </body>
</html>