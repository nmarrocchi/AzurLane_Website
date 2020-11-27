<!DOCTYPE php>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="img/icon.png" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Azur Lane - List of Ships</title>
    </head>

    <body>

        <div class="Header">
            <img class="icon" src="img/Logo_2.png"alt=""> 

            <ul class="menu">

                <li><a href="index.php">Accueil</a></li>
                <li><a href="characters.php">Les personnages</a></li>
                <li><a href="factions.php">les factions</a></li>
                <li><a href="story.php">l'histoire</a></li>
                <li><a href="anime.php">l'adaptation animée</a></li>
            
            </ul>

        </div>

        <div class="contenu">

            <div class=characters">

                <table>
                    <thead>
                        <tr>
                            <td class="ID">ID</td>
                            <td class="ShipName">Ship name</td>
                            <td class="Rarity">Rarity</td>
                            <td class="TypeOfShip">Type of ship</td>
                            <td class="Affiliation">Affiliation</td>
                            <td class="Firepower">Firepower</td>
                            <td class="Health">Health</td>
                            <td class="AntiAir">Anti-Air</td>
                            <td class="Evasion">Evasion</td>
                            <td class="Aviation">Aviation</td>
                            <td class="Torpedo">Torpedo</td>
                        </tr>
                    </thead>

                    <tr>
                        <td class="ID">1</td>
                        <td class="ShipName">Azuma</td>
                        <td class="Rarity">Ultra Rare</td>
                        <td class="TypeOfShip">Large Cruiser</td>
                        <td class="Affiliation">Sakura Empire</td>
                        <td class="Firepower">307</td>
                        <td class="Health">7541</td>
                        <td class="AntiAir">226</td>
                        <td class="Evasion">50</td>
                        <td class="Aviation">0</td>
                        <td class="Torpedo">0</td>
                    </tr>

                </table>

            </div>

        </div>

    </body>
</html>

<?php new PDO