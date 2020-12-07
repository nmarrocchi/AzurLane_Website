<!DOCTYPE php>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="img/icon.png" />
        <link rel="stylesheet" type="text/css" href="CSS/style.css" />
        <link rel="stylesheet" type="text/css" href="CSS/Character.css" />
        <link rel="stylesheet" type="text/css" href="CSS/menu.css" />

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

           switch($Data["Retrofit?"]){
                case 0: $Data["Retrofit?"] = '';
           break;
                case 1: $Data["Retrofit?"] = ' - Retrofit';
            break;

            default: $Data["Retrofit?"] = '';
           }

?>

            <div class="Character_Infos">

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

                    <div class="Character_Stats">
                        <div id="Lv120">Lv 120<?php echo $Data["Retrofit?"];?></div>
                        <table class="Character_All_Stats">
                            <tr>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Health.png" alt="Health"></td>
                                <td class="Stats"><?php echo $Data["Health"]; ?></td>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Armor.png" alt="Armor"></td>
                                <td class="Stats"><?php echo $Data["Armor"]; ?></td>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Reload.png" alt="Reload"></td>
                                <td class="Stats"><?php echo $Data["Reload"]; ?></td>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Lucky.png" alt="Lucky"></td>
                                <td class="Stats"><?php echo $Data["Lucky"]; ?></td>
                            </tr>
                            <tr>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Firepower.png" alt="Firepower"></td>
                                <td class="Stats"><?php echo $Data["Firepower"]; ?></td>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Torpedo.png" alt="Torpedo"></td>
                                <td class="Stats"><?php echo $Data["Torpedo"]; ?></td>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Evasion.png" alt="Evasion"></td>
                                <td class="Stats"><?php echo $Data["Evasion"]; ?></td>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Evasion.png" alt="Evasion"></td>
                                <td class="Stats"><?php echo $Data["Speed"]; ?></td>
                            </tr>
                            <tr>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Anti-Air.png" alt="Anti-Air"></td>
                                <td class="Stats"><?php echo $Data["Anti-Air"]; ?></td>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Aviation.png" alt="Aviation"></td>
                                <td class="Stats"><?php echo $Data["Aviation"]; ?></td>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Oil_Cost.png" alt="Oil_Cost"></td>
                                <td class="Stats"><?php echo $Data["Oil_Cost"]; ?></td>
                                <td class="Stats_Img"><img src="img/Stats_Icon/Accuracy.png" alt="Accuracy"></td>
                                <td class="Stats"><?php echo $Data["Accuracy"]; ?></td>
                            </tr>
                            <tr>
                                <td class="Stats_Img"><img src="img/Stats_Icon/ASW.png" alt="Anti-Submarine Warfare"></td>
                                <td class="Stats"><?php echo $Data["ASW"]; ?></td>
                                <td class="Stats" colspan="6">Listed stats are at 100 Affection and with maxed enhancements</td>
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