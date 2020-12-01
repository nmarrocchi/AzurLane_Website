<!DOCTYPE php>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="img/icon.png" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Azur Lane - List of Ships</title>
    </head>


    <?php

        try{

$BDD = new PDO('mysql:host=192.168.65.60; dbname=azurlane; charset=utf8','AzurLane', 'azurlane');

$Result = $BDD->query('SELECT * FROM characters ORDER BY Rarity DESC ');

}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}
 
?>


    <body>

        <?php include("Header.php"); ?>

        <div class="Contenu">

<?php

        $ID = 0;

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

     switch($Data["Affiliation"]){
        case 1: $Data['Affiliation'] = 'Dragon Empery';
     break;
        case 2: $Data["Affiliation"] = 'Eagle Union';
    break;
        case 3: $Data["Affiliation"] = 'Iris Libre';
    break;
        case 4: $Data["Affiliation"] = 'Iron Blood';
    break;
        case 5: $Data["Affiliation"] = 'Northem Parliament ';
    break;
        case 6: $Data["Affiliation"] = 'Royal Navy';
    break;
        case 7: $Data["Affiliation"] = 'Sakura Empire';
    break;
        case 8: $Data["Affiliation"] = 'Sardegna Empire';
    break;
        case 9: $Data["Affiliation"] = 'Universal';
    break;
        case 10: $Data["Affiliation"] = 'Vichya Dominion';
    break;
        case 11: $Data["Affiliation"] = 'BiliBili';
    break;
        case 12: $Data["Affiliation"] = 'HoloLive';
    break;
        case 13: $Data["Affiliation"] = 'Kizuna AI';
    break;
        case 14: $Data["Affiliation"] = 'Neptunia';
    break;
        case 15: $Data["Affiliation"] = 'Utawarerumono';
    break;
        case 16: $Data["Affiliation"] = 'Venus Vacation';
    break;

    default: $Data["Affiliation"] = 'None';
    }
?>

                <div class="Characters_Infos">

                    <div class="Characters_Icon">
                        <p><?php echo $Data["ShipName"]; ?></p>
                        <img class="Characters_Type" src="img/Type/<?php echo $Data["TypeOfShip"]; ?>.png" alt="Type">
                        <img class="Characters_Img" src="img/Characters/<?php echo $Data["ShipName"]; ?>.png" alt="Character">
                        
                    </div>
                    <div class="Characters_Stats">

                        <table class="Basic_Values">
                            <tr>
                                <thead class="THead">
                                    <td class="h_Rarity">Rarity</td>
                                    <td class="h_TypeOfShip">Type Of Ship</td>
                                    <td class="h_Affiliation" colspan="3">Nationality</td>
                                </thead>
                            </tr>
                            <tr class="Values">
                                <td class="Rarity"><?php echo $Data["Rarity"]; ?></td>
                                <td class="TypeOfShip"><?php echo $Data["TypeOfShip"]; ?></td>
                                <td class="Affiliation" colspan="3"><img src="img/Affiliation/<?php echo $Data["Affiliation"]; ?>.png" alt="Affiliation"><p><?php echo $Data["Affiliation"]; ?></p></td>
                            </tr>
                        </table>

                        <table class="Stats_Values">
                            <tr>
                                <thead class="THead">
                                    <td class="h_Firepower">Firepower</td>
                                    <td class="h_Health">Health</td>
                                    <td class="h_AntiAir">Anti-Air</td>
                                    <td class="h_Evasion">Evasion</td>
                                    <td class="h_Aviation">Aviation</td>
                                    <td class="h_Torpedo">Torpedo</td>
                                </thead>
                            </tr>
                                <tr class="Values">
                                <td class="Firepower"><?php echo $Data["Firepower"]; ?></td>
                                <td class="Health"><?php echo $Data["Health"]; ?></td>
                                <td class="AntiAir"><?php echo $Data["AntiAir"]; ?></td>
                                <td class="Evasion"><?php echo $Data["Evasion"]; ?></td>
                                <td class="Aviation"><?php echo $Data["Aviation"]; ?></td>
                                <td class="Torpedo"><?php echo $Data["Torpedo"]; ?></td>
                            </tr>
                        </table>
                    </div>

                </div>

            <?php

}
$Result->closeCursor();

?>

        </div>

        <div class="Footer">

        <p>Copyright 0ver_Draw 2020-2030    Source : azurlane.koumakan.jp</p>

        </div>

    </body>
</html>