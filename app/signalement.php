<?php 
        $busErr = $directionErr = $arretErr = "";
        if (isset($_POST["Valider"])) {
            if (empty($_POST["bus"])) {
                $busErr = '<i class="fas fa-exclamation-triangle icon-warn"></i>Vous avez oublié de sélectionner la ligne de bus.';
            }
            else {
                if (empty($_POST["direction"])) {
                    $directionErr = '<i class="fas fa-exclamation-triangle icon-warn"></i>Vous avez oublié de définir la direction du bus.';
                }
                else {
                    if (empty($_POST["arret"])) {
                        $arretErr = '<i class="fas fa-exclamation-triangle icon-warn"></i>Vous avez oublié de renseigner l\'arrêt où à lieu le contrôle.';
                    }
                    else {
                        $buspass = urlencode($_POST["bus"]);
                        $directionpass = urlencode($_POST["direction"]);
                        $arretpass = urlencode($_POST["arret"]);
                        header('Location: traitement.php?bus='.$buspass.'&direction='.$directionpass.'&arret='.$arretpass.'');
                    }
                }
            }        
            
            if (empty($_POST["direction"])) {
                $directionErr = '<i class="fas fa-exclamation-triangle icon-warn"></i>Vous avez oublié de définir la direction du bus.';
            }
            else {
                if (empty($_POST["bus"])) {
                    $busErr = '<i class="fas fa-exclamation-triangle icon-warn"></i>Vous avez oublié de sélectionner la ligne de bus.';
                }
                else {
                    if (empty($_POST["arret"])) {
                        $arretErr = '<i class="fas fa-exclamation-triangle icon-warn"></i>Vous avez oublié de renseigner l\'arrêt où à lieu le contrôle.';
                    }
                    else {
                        $buspass = urlencode($_POST["bus"]);
                        $directionpass = urlencode($_POST["direction"]);
                        $arretpass = urlencode($_POST["arret"]);
                        header('Location: traitement.php?bus='.$buspass.'&direction='.$directionpass.'&arret='.$arretpass.'');
                    }
                }
            }
        
            if (empty($_POST["arret"])) {
                $arretErr = '<i class="fas fa-exclamation-triangle icon-warn"></i>Vous avez oublié de renseigner l\'arrêt où à lieu le contrôle.';
            }
            else {
                if (empty($_POST["bus"])) {
                    $busErr = '<i class="fas fa-exclamation-triangle icon-warn"></i>Vous avez oublié de sélectionner la ligne de bus.';
                }
                else {
                    if (empty($_POST["direction"])) {
                        $directionErr = '<i class="fas fa-exclamation-triangle icon-warn"></i>Vous avez oublié de définir la direction du bus.';
                    }
                    else {
                        $buspass = urlencode($_POST["bus"]);
                        $directionpass = urlencode($_POST["direction"]);
                        $arretpass = urlencode($_POST["arret"]);
                        header('Location: traitement.php?bus='.$buspass.'&direction='.$directionpass.'&arret='.$arretpass.'');
                    }
                }
            }
        }
    ?>

<!DOCTYPE html>
<html>

<head>
    <title>Projet ISN</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/608a42f9ee.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>

<body>
    <div class="title"><a href="index.php"><i class="fas fa-arrow-left left-icon"></i></a>Pannes Ametis</div>
    <div class="subtitle">Signaler une panne en cours</div>
    

    <form action="signalement.php" method="post">
        <label for="bus">Sélectionner la ligne contrôlée :</label>
        <div class="bus-select">
            <div class="darkmode-ignore">
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
            <label for="direction">Dans quelle direction va-t-il ?</label>
            <div class="direction">
                <input type="radio" name="direction" id="Etouvie" value="Étouvie" onchange="swapConfig(this)" />
                <label class="select" for="Etouvie">Étouvie<i class="fas fa-angle-right dir-icon"></i>Pôle Jules Verne</label>
                <input type="radio" name="direction" id="Pole_Jules_Verne" value="Pôle Jules Verne" onchange="swapConfig(this)" />
                <label class="select" for="Pole_Jules_Verne">Pôle Jules Verne<i
                        class="fas fa-angle-right dir-icon"></i>Étouvie</label>
            </div>
            <div id="EtouvieSettings" style="display:none">
                <label for="arret">Vers quel arrêt vous trouvez-vous ?</label>
                <select name="arret" id="arret">
                    <option disabled selected value="">L'arrêt du contrôle...</option>
                    <?php
                        $arrets_N1_Etouvie = array('Étouvie, Quai A', 'Martinique', 'Collège Rosa Parks', 'Languedoc', 'Les Coursives', 'La Fontaine', 'Place La Barre', 'Sully', 'Espace Alliance', 
                        'Faubourg de Hem', 'Église Saint-Firmin', 'Zoo d\'Amiens', 'Jean Jaurès', 'Saint-Jacques, Quai A', 'Maison de la Culture, Quai A', 'Hôtel de Ville', 'Jacobins', 'Émile Zola', 
                        'Gare du Nord, Quai B', 'Caserne Dejean', 'Pinceau', 'Lycée de Luzarches', 'Église Saint-Acheul', 'Mercey', 'Sobo', 'Pont de l\'Avre', 
                        'Cité du Château', 'La Rose Rouge', 'Poidevin', 'Mairie de Longueau', 'La Fourche', 'Croix de Fer', 'Centre Commercial Glisy', 'Capitaine Némo', 'Pôle Jules Verne');
                        if (date('D') == "Sun") {
                            array_splice($arrets_N1_Etouvie, 15, 0, "Saint-Jacques, Quai C");
                            array_splice($arrets_N1_Etouvie, 16, 0, "Vogel, Quai F");
                            array_splice($arrets_N1_Etouvie, 17, 0, "Place du Marché");
                            array_splice($arrets_N1_Etouvie, 18, 0, "Maison de la Culture, Quai C");
                            unset($arrets_N1_Etouvie[13]);
                            unset($arrets_N1_Etouvie[14]);
                        }
                        foreach($arrets_N1_Etouvie as $elements) {
                            echo '<option value="'. $elements .'">'. $elements .'</option>';
                        }
                    ?>
                </select>
            </div>
            <div id="Pole_Jules_VerneSettings" style="display:none">
                <label>Vers quel arrêt vous trouvez-vous ?</label>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <?php
                        $arrets_N1_Pole_Jules_Verne = array('Étouvie, Quai A', 'Martinique', 'Collège Rosa Parks', 'Languedoc', 'Les Coursives', 'La Fontaine', 'Place La Barre', 'Sully', 'Espace Alliance', 
                        'Faubourg de Hem', 'Église Saint-Firmin', 'Zoo d\'Amiens', 'Jean Jaurès', 'Saint-Jacques, Quai B', 'Maison de la Culture, Quai B', 'Place du Marché', 'Befroi', 'Dusevel', 'Palais de Justice', 
                        'René Goblet', 'Gare du Nord, Quai A', 'Caserne Dejean', 'Pinceau', 'Lycée de Luzarches', 'Église Saint-Acheul', 'Mercey', 'Sobo', 'Pont de l\'Avre', 'Cité du Château', 'La Rose Rouge', 
                        'Poidevin', 'Mairie de Longueau', 'La Fourche', 'Croix de Fer', 'Centre Commercial Glisy', 'Capitaine Némo', 'Pôle Jules Verne');
                        if (date('D') == "Sun") {
                            array_splice($arrets_N1_Pole_Jules_Verne, 16, 0, "Vogel, Quai A");
                            array_splice($arrets_N1_Pole_Jules_Verne, 16, 0, "Saint-Jacques, Quai D");
                            unset($arrets_N1_Pole_Jules_Verne[13]);
                            unset($arrets_N1_Pole_Jules_Verne[14]);
                            unset($arrets_N1_Pole_Jules_Verne[15]);
                        }
                        $arrets_N1_Pole_Jules_Verne = array_reverse($arrets_N1_Pole_Jules_Verne);
                        foreach($arrets_N1_Pole_Jules_Verne as $elements) {
                            echo '<option value="'. $elements .'">'. $elements .'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div id="bus_n2Settings" style="display:none;">
            <label for="direction">Dans quelle direction va-t-il ?</label>
            <div class="direction">
                <input type="radio" name="direction" id="La_Paix" value="La Paix" onchange="swapConfig(this)" />
                <label class="select" for="La_Paix">La Paix<i class="fas fa-angle-right dir-icon"></i>IUT</label>
                <input type="radio" name="direction" id="IUT" value="IUT" onchange="swapConfig(this)" />
                <label class="select" for="IUT">IUT<i class="fas fa-angle-right dir-icon"></i>La Paix</label>
            </div>

            <div id="La_PaixSettings" style="display:none">
                <label for="arret">Vers quel arrêt vous trouvez-vous ?</label>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <?php
                        $arrets_N2_La_Paix = array('La Paix', 'Chardin', 'Pôle d\'Échanges Nord, Quai B', 'Colvert', 'Nautilus', 'Balzac', 'Stendhal', 'Centre Saint-Victor', 'Eloi Morel', 
                        'Parc Saint-Pierre', 'Hortillonages', 'Alsace Lorraine', 'Gare du Nord, Quai D', 'Otages', 'Cirque Jules Verne, Quai A', 'Nicole Fontaine, Quai B', 'Simone Veil, Quai A', 
                        'Quatre Chênes', 'Libération, Quai A', 'Quatre Lemaire', 'Ambroise Paré', 'Rotonde', 'CHU A. Picardie, Quai C', 'CHU A. Picardie, Quai A', 'Laënnec, Quai A', 'Résidence du Thil', 'IUT');
                        foreach($arrets_N2_La_Paix as $elements) {
                            echo '<option value="'. $elements .'">'. $elements .'</option>';
                        }
                    ?>
                </select>
            </div>
            <div id="IUTSettings" style="display:none">
                <label>Vers quel arrêt vous trouvez-vous ?</label>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <?php
                        $arrets_N2_IUT = array('La Paix', 'Chardin', 'Pôle d\'Échanges Nord, Quai A', 'Colvert', 'Nautilus', 'Balzac', 'Stendhal', 'Centre Saint-Victor', 'Eloi Morel', 
                        'Parc Saint-Pierre', 'Hortillonages', 'Alsace Lorraine', 'Gare du Nord, Quai C', 'Otages', 'Cirque Jules Verne, Quai B', 'Nicole Fontaine, Quai A', 'Simone Veil, Quai B', 
                        'Quatre Chênes', 'Libération, Quai B', 'Quatre Lemaire', 'Ambroise Paré', 'Rotonde', 'CHU A. Picardie, Quai A', 'CHU A. Picardie, Quai C', 'Laënnec, Quai B', 'Résidence du Thil', 'IUT');
                        $arrets_N2_IUT = array_reverse($arrets_N2_IUT);
                        foreach($arrets_N2_IUT as $elements) {
                            echo '<option value="'. $elements .'">'. $elements .'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div id="bus_n3Settings" style="display:none">
            <label for="direction">Dans quelle direction va-t-il ?</label>
            <div class="direction">
                <input type="radio" name="direction" id="Promenade" value="Promenade" onchange="swapConfig(this)" />
                <label class="select" for="Promenade">Promenade<i class="fas fa-angle-right dir-icon"></i>Centre Commercial
                    Sud</label>
                <input type="radio" name="direction" id="Centre_Commercial_Sud" value="Centre Commercial Sud" onchange="swapConfig(this)" />
                <label class="select" for="Centre_Commercial_Sud">Centre Commercial Sud<i
                        class="fas fa-angle-right dir-icon"></i>Promenade</label>
            </div>
            <div id="PromenadeSettings" style="display:none">
                <label for="arret">Vers quel arrêt vous trouvez-vous ?</label>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <?php
                        $arrets_N3_Promenade = array('Promenade', 'Centre Commercial Nord, Quai C', 'Romain Rolland', 'Espace Santé', 'Pôle d\'Echanges Nord, Quai C', 'Berlioz', 'Clémenceau', 
                        'Citadelle François 1er', 'Citadelle Montrescu, Quai B', 'Vogel, Quai C', 'UPJV Saint-Leu', 'Place du Don', 'Alsace Lorraine', 'Gare du Nord, Quai D', 'Otages', 
                        'Cirque Jules Verne, Quai D', 'Collège Saint-Martin', 'Delpech, Quai A', 'Cité-Providence', 'Charassain', 'Aquapôle', 'Pôle des cliniques', 'Georges Beauvais', 
                        'Espagne', 'Grèce', 'I.M.E', 'Centre Commercial Sud');
                        foreach($arrets_N3_Promenade as $elements) {
                            echo '<option value="'. $elements .'">'. $elements .'</option>';
                        }
                    ?>
                </select>
            </div>
            <div id="Centre_Commercial_SudSettings" style="display:none">
                <label>Vers quel arrêt vous trouvez-vous ?</label>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <?php
                        $arrets_N3_Centre_Commercial_Sud = array('Promenade', 'Centre Commercial Nord, Quai C', 'Romain Rolland', 'Espace Santé', 'Pôle d\'Echanges Nord, Quai C', 'Berlioz', 'Clémenceau', 
                        'Citadelle François 1er', 'Citadelle Montrescu, Quai B', 'Vogel, Quai C', 'UPJV Saint-Leu', 'Place du Don', 'Alsace Lorraine', 'Gare du Nord, Quai D', 'Otages', 
                        'Cirque Jules Verne, Quai D', 'Collège Saint-Martin', 'Delpech, Quai A', 'Cité-Providence', 'Charassain', 'Aquapôle', 'Pôle des cliniques', 'Georges Beauvais', 
                        'Espagne', 'Grèce', 'I.M.E', 'Centre Commercial Sud');
                        $arrets_N3_Centre_Commercial_Sud = array_reverse($arrets_N3_Centre_Commercial_Sud);
                        foreach($arrets_N3_Centre_Commercial_Sud as $elements) {
                            echo '<option value="'. $elements .'">'. $elements .'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div id="bus_n4Settings" style="display:none">
            <label for="direction">Dans quelle direction va-t-il ?</label>
            <div class="direction">
                <input type="radio" name="direction" id="Pole_Licorne" value="Pôle Licorne" onchange="swapConfig(this)" />
                <label class="select" for="Pole_Licorne">Pôle Licorne<i class="fas fa-angle-right dir-icon"></i>Longueau SNCF</label>
                <input type="radio" name="direction" id="Longueau_SNCF" value="Longueau SNCF" onchange="swapConfig(this)" />
                <label class="select" for="Longueau_SNCF">Longueau SNCF<i class="fas fa-angle-right dir-icon"></i>Pôle Licorne</label>
            </div>
            <div id="Pole_LicorneSettings" style="display:none">
                <label for="arret">Vers quel arrêt vous trouvez-vous ?</label>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <?php
                        $arrets_N4_Pole_Licorne = array('Pôle Licorne', 'Hippodrome', 'Colbert', 'Lucien Fournier', 'Simone Veil, Quai C', 'Nicole Fontaine Quai A', 'Hôtel de Ville', 'Jacobins',
                        'Émile Zola', 'Gare du Nord, Quai B', 'Caserne Dejean', 'Pinceau', 'Lycée de Luzarches', 'Mons', '3ème D.I.', 'Hôtel des Impôts', 
                        'Rollin', 'Ormaie', 'Görlitz, Quai A', 'Frédéric Mistral', 'Collège Guy Mareschal', 'Iream', 'Bel Air', 'Wasse', 'Place de Cagny', 'Latapie', 'Longueau SNCF' );
                        foreach($arrets_N4_Pole_Licorne as $elements) {
                            echo '<option value="'. $elements .'">'. $elements .'</option>';
                        }
                    ?>
                </select>
            </div>
            <div id="Longueau_SNCFSettings" style="display:none">
                <label>Vers quel arrêt vous trouvez-vous ?</label>
                <select name="arret" id="arret">
                    <option value="" disabled selected>L'arrêt du contrôle...</option>
                    <?php
                        $arrets_N4_Longueau_SNCF = array('Pôle Licorne', 'Hippodrome', 'Colbert', 'Lucien Fournier', 'Simone Veil, Quai C', 'Nicole Fontaine Quai A', 'Maison de la Culture', 'Place du Marché',
                        'Beffroi', 'Dusevel', 'Palais de Justice', 'René Goblet','Gare du Nord, Quai B', 'Caserne Dejean', 'Pinceau', 'Lycée de Luzarches', 'Mons', '3ème D.I.', 'Hôtel des Impôts', 
                        'Rollin', 'Ormaie', 'Görlitz, Quai A', 'Frédéric Mistral', 'Collège Guy Mareschal', 'Iream', 'Bel Air', 'Wasse', 'Place de Cagny', 'Latapie', 'Longueau SNCF' );
                        $arrets_N4_Longueau_SNCF = array_reverse($arrets_N4_Longueau_SNCF);
                        foreach($arrets_N4_Longueau_SNCF as $elements) {
                            echo '<option value="'. $elements .'">'. $elements .'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <?php
            if ($busErr != "" OR $arretErr != "" OR $directionErr != "") {
                echo '<div class="error"><div class="error-title">Vous avez oublier de compléter des informations :</div>'; 
                echo '<div class="error-text">'.$busErr.'</div>';
                echo '<div class="error-text">'.$directionErr.'</div>';
                echo '<div class="error-text">'.$arretErr.'</div>';
                echo '</div>';
            }
        ?>
        <div class="submit">
            <input type="submit" name="Valider" value="ENVOYER">
        </div>
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

    <script>
        window.addEventListener( "pageshow", function ( event ) {
        var historyTraversal = event.persisted || 
                                ( typeof window.performance != "undefined" && 
                                    window.performance.navigation.type === 2 );
        if ( historyTraversal ) {
            window.location.reload();
        }
        });
    </script>

</body>

</html>