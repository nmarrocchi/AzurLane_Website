<!DOCTYPE php>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="img/icon.png" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" type="text/css" href="Character.css" />
        <title>Azur Lane</title>
    </head>


    <?php

        try{

$BDD = new PDO('mysql:host=127.0.0.3; dbname=azurlane; charset=utf8','AzurLane', 'azurlane');

$Result = $BDD->query("SELECT * FROM `characters` WHERE `Shipname` = '".$_GET['Shipname']."'");


}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}
?>


    <body>

        <?php include("Header.php"); ?>

        <div class="Contenu">

<?php 

        $Rarity_Color = "";

        while ($Data = $Result->fetch())
        {  
            switch($Data["Rarity"]){
                case 5: $Data["Rarity"] = 'Ultra Rare ★★★★★★';
                             $Rarity_Color = "style = 'Background-image: linear-gradient(to bottom right, #AFA 15%, #AAF, #FAA 85%);' ";
            break;
                case 4: $Data["Rarity"] = 'Super Rare ★★★★★';
                             $Rarity_Color = "style = 'Background-color: PaleGoldenRod ;' ";
            break;
                case 3: $Data["Rarity"] = 'Elite ★★★★';
                             $Rarity_Color = "style = 'Background-color: Plum ;' ";
            break;
                case 2: $Data["Rarity"] = 'Rare ★★★';
                             $Rarity_Color = "style = 'Background-color: PowderBlue ;' ";
            break;
                case 1: $Data["Rarity"] = 'Common ★★';
                             $Rarity_Color = "style = 'Background-color: Gainsboro ;' ";
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
               case 5: $Data["Affiliation"] = 'Northern Parliament';
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

            <div class="Character_Infos">

                                <!--    <div class="Character_Icon">
                                        <p>?php echo $Data["ShipName"]; ?></p>
                                        <img class="Characters_Type" src="img/Type/<?php echo $Data["TypeOfShip"]; ?>.png" alt="Type">
                                        <img class="Characters_Img" src="img/Characters/<?php echo $Data["ShipName"]; ?>.png" alt="Character"> 
                                    </div> -->

                    <div class="Character_Info">

                        <table>
                            <tr>
                                <td id="Character_Icon_Slot" rowspan="4">
                                    <div class="Character_Icon" <?php echo $Rarity_Color; ?>>
                                        <p><?php echo $Data["ShipName"]; ?></p>
                                        <img class="Character_Img" src="img/Characters/<?php echo $Data["ShipName"]; ?>.png" alt="Character"> 
                                    </div>
                                </td>
                                <td class="Table_Infos"><p>Construction Time : </p></td>
                                <td class="Table_Infos"><?php echo $Data["Timer"]; ?></td>
                            </tr>
                            <tr>
                                <td class="Table_Infos"><p>Rarity : </p></td>
                                <td class="Table_Infos_Rarity"><p><?php echo $Data["Rarity"]; ?></p></td>
                            </tr>
                            <tr>
                                <td class="Table_Infos"><p>Affiliation : </p></td>
                                <td class="Table_Infos_Affiliation"><img src="img/Affiliation/<?php echo $Data["Affiliation"]; ?>.png" alt="Affiliation"><p><?php echo $Data["Affiliation"]; ?></p></td>
                            </tr>
                            <tr>
                                <td class="Table_Infos"><p>Type of Ship : </p></td>
                                <td class="Table_Infos_Type"><img class="Character_Type" src="img/Type/<?php echo $Data["TypeOfShip"]; ?>.png" alt="Type"><p><?php echo $Data["TypeOfShip"]; ?></p></td>
                            </tr>
                        </table>
                    </div>

                    



            </div>

        </div>

<?php

}

$Result->closeCursor();

?>

        <div class="Footer">

        <p>Copyright 0ver_Draw 2020-2030    Source : azurlane.koumakan.jp</p>

        </div>

    </body>
</html>