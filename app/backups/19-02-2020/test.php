<!DOCTYPE html>
<html>

<head>
    <title>Projet ISN</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/77c8ef32e6.js" crossorigin="anonymous"></script>
</head>

<body>
    <a href="index.php"><i class="fas fa-arrow-left icon-left"></i></a>
    <h2>Contrôle Ametis</h2>
    <h3>Signaler un contrôle en cours</h3>
    <br><br>

    <?php 
        $busErr = $directionErr = $arretErr = "";
        if (isset($_POST["Valider"])) {
            if (empty($_POST["bus"])) {
                $busErr = '<i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de sélectionner la ligne de bus.</p><br>';
            }
            else {
                if (empty($_POST["direction"])) {
                    $directionErr = '<i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de définir la direction du bus.</p><br>';
                }
                else {
                    if (empty($_POST["arret"])) {
                        $arretErr = '<i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de renseigner l\'arrêt où à lieu le contrôle.</p><br>';
                    }
                    else {
                        header('Location: http://isnum.xdeo.fr/validation.php?bus='.$_POST["bus"].'&direction='.$_POST["direction"].'&arret='.$_POST["arret"].'');
                    }
                }
            }        
            
            if (empty($_POST["direction"])) {
                $directionErr = '<i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de définir la direction du bus.</p><br>';
            }
            else {
                if (empty($_POST["bus"])) {
                    $busErr = '<i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de sélectionner la ligne de bus.</p><br>';
                }
                else {
                    if (empty($_POST["arret"])) {
                        $arretErr = '<i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de renseigner l\'arrêt où à lieu le contrôle.</p><br>';
                    }
                    else {
                        header('Location: http://isnum.xdeo.fr/validation.php?bus='.$_POST["bus"].'&direction='.$_POST["direction"].'&arret='.$_POST["arret"].'');
                    }
                }
            }
        
            if (empty($_POST["arret"])) {
                $arretErr = '<i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de renseigner l\'arrêt où à lieu le contrôle.</p><br>';
            }
            else {
                if (empty($_POST["bus"])) {
                    $busErr = '<i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de sélectionner la ligne de bus.</p><br>';
                }
                else {
                    if (empty($_POST["direction"])) {
                        $directionErr = '<i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de définir la direction du bus.</p><br>';
                    }
                    else {
                        header('Location: http://isnum.xdeo.fr/validation.php?bus='.$_POST["bus"].'&direction='.$_POST["direction"].'&arret='.$_POST["arret"].'');
                    }
                }
            }
        }
    ?>

    <form action="test.php" method="post">
        <label for="bus">Sélectionner la ligne contrôlée :</label>
        <br><br>
        <div class="darkmode-ignore">
            <div class="bus-select">
                <input type="radio" id="bus_n1" name="bus" value="N1" onchange="swapConfig(this)">
                <label class="n1-select" for="bus_n1">N1</label>
                <input type="radio" id="bus_n2" name="bus" value="N2" onchange="swapConfig(this)">
                <label class="n2-select" for="bus_n2">N2</label>
                <input type="radio" id="bus_n3" name="bus" value="N3" onchange="swapConfig(this)">
                <label class="n3-select" for="bus_n3">N3</label>
                <input type="radio" id="bus_n4" name="bus" value="N4" onchange="swapConfig(this)">
                <label class="n4-select" for="bus_n4">N4</label>
            </div>
        </div>
        <div id="bus_n1Settings" style="display:none">
            <br><br><br>
            <label for="direction">Dans quelle direction va-t-il ?</label>
            <br><br>
            <div class="direction">
                <input type="radio" name="direction" id="Etouvie" value="Étouvie" onchange="swapConfig(this)" />
                <label class="select" for="Etouvie">Étouvie<i class="fas fa-angle-right"></i>Pôle Jules Verne</label>
                <br><br>
                <input type="radio" name="direction" id="Pole_Jules_Verne" value="Pôle Jules Verne"
                    onchange="swapConfig(this)" />
                <label class="select" for="Pole_Jules_Verne">Pôle Jules Verne<i
                        class="fas fa-angle-right"></i>Étouvie</label>
            </div>
            <div id="EtouvieSettings" style="display:none">
                <br><br>
                <label for="arret">Vers quel arrêt vous trouvez-vous ?</label>
                <br><br>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <option value="Bientot1">Bientot1</option>
                    <option value="Bientot2">Bientot2</option>
                    <option value="Bientot3">Bientot3</option>
                </select>
            </div>
            <div id="Pole_Jules_VerneSettings" style="display:none">
                <br><br>
                <label>Vers quel arrêt vous trouvez-vous ?</label>
                <br><br>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <option value="Bientot4">Bientot4</option>
                    <option value="Bientot5">Bientot5</option>
                    <option value="Bientot6">Bientot6</option>
                </select>
            </div>
        </div>

        <div id="bus_n2Settings" style="display:none">
            <br><br><br>
            <label for="direction">Dans quelle direction va-t-il ?</label>
            <br><br>
            <div class="direction">
                <input type="radio" name="direction" id="La_Paix" value="La Paix" onchange="swapConfig(this)" />
                <label class="select" for="La_Paix">La Paix<i class="fas fa-angle-right"></i>IUT</label>
                <br><br>
                <input type="radio" name="direction" id="IUT" value="IUT" onchange="swapConfig(this)" />
                <label class="select" for="IUT">IUT<i class="fas fa-angle-right"></i>La Paix</label>
            </div>

            <div id="La_PaixSettings" style="display:none">
                <br><br>
                <label for="arret">Vers quel arrêt vous trouvez-vous ?</label>
                <br><br>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <option value="Bientot7">Bientot7</option>
                    <option value="Bientot8">Bientot8</option>
                    <option value="Bientot9">Bientot9</option>
                </select>
            </div>
            <div id="IUTSettings" style="display:none">
                <br><br>
                <label>Vers quel arrêt vous trouvez-vous ?</label>
                <br><br>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <option value="Bientot10">Bientot10</option>
                    <option value="Bientot11">Bientot11</option>
                    <option value="Bientot12">Bientot12</option>
                </select>
            </div>
        </div>

        <div id="bus_n3Settings" style="display:none">
            <br><br><br>
            <label for="direction">Dans quelle direction va-t-il ?</label>
            <br><br>
            <div class="direction">
                <input type="radio" name="direction" id="Promenade" value="Promenade" onchange="swapConfig(this)" />
                <label class="select" for="Promenade">Promenade<i class="fas fa-angle-right"></i>Centre Commercial
                    Sud</label>
                <br><br>
                <input type="radio" name="direction" id="Centre_Commercial_Sud" value="Centre Commercial Sud"
                    onchange="swapConfig(this)" />
                <label class="select" for="Centre_Commercial_Sud">Centre Commercial Sud<i
                        class="fas fa-angle-right"></i>Promenade</label>
            </div>
            <div id="PromenadeSettings" style="display:none">
                <br><br>
                <label for="arret">Vers quel arrêt vous trouvez-vous ?</label>
                <br><br>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <option value="Bientot13">Bientot13</option>
                    <option value="Bientot14">Bientot14</option>
                    <option value="Bientot15">Bientot15</option>
                </select>
            </div>
            <div id="Centre_Commercial_SudSettings" style="display:none">
                <br><br>
                <label>Vers quel arrêt vous trouvez-vous ?</label>
                <br><br>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <option value="Bientot16">Bientot16</option>
                    <option value="Bientot17">Bientot17</option>
                    <option value="Bientot18">Bientot18</option>
                </select>
            </div>
        </div>

        <div id="bus_n4Settings" style="display:none">
            <br><br><br>
            <label for="direction">Dans quelle direction va-t-il ?</label>
            <br><br>
            <div class="direction">
                <input type="radio" name="direction" id="Pole_Licorne" value="Pôle Licorne"
                    onchange="swapConfig(this)" />
                <label class="select" for="Pole_Licorne">Pôle Licorne<i class="fas fa-angle-right"></i>Longueau
                    SNCF</label>
                <br><br>
                <input type="radio" name="direction" id="Longueau_SNCF" value="Longueau SNCF"
                    onchange="swapConfig(this)" />
                <label class="select" for="Longueau_SNCF">Longueau SNCF<i class="fas fa-angle-right"></i>Pôle
                    Licorne</label>
            </div>
            <div id="Pole_LicorneSettings" style="display:none">
                <br><br>
                <label for="arret">Vers quel arrêt vous trouvez-vous ?</label>
                <br><br>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <option value="Bientot19">Bientot19</option>
                    <option value="Bientot20">Bientot20</option>
                    <option value="Bientot21">Bientot21</option>
                </select>
            </div>
            <div id="Longueau_SNCFSettings" style="display:none">
                <br><br>
                <label>Vers quel arrêt vous trouvez-vous ?</label>
                <br><br>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <option value="Bientot22">Bientot22</option>
                    <option value="Bientot23">Bientot23</option>
                    <option value="Bientot24">Bientot24</option>
                </select>
            </div>
        </div>

        <?php
            if ($busErr != "" OR $arretErr != "" OR $directionErr != "") {
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<strong><p>Il y a une/des erreur(s) :</p></strong>"; 
                echo "<br>";
                echo "$busErr";
                echo "$directionErr";
                echo "$arretErr";
            }
        ?>
        <br><br><br><br>
        <input type="submit" name="Valider" value="ENVOYER">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
    <script type="text/javascript" src="darkmode.js"></script>

    <script>
        function swapConfig(x) {
            var radioName = document.getElementsByName(x.name);
            for (i = 0; i < radioName.length; i++) {
                document.getElementById(radioName[i].id.concat("Settings")).style.display = "none";
            }
            document.getElementById(x.id.concat("Settings")).style.display = "initial";
        }
    </script>

</body>

</html>