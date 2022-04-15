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


$arrets_N2_La_Paix = array('La Paix', 'Chardin', 'Pôle d\'Échanges Nord, Quai B', 'Colvert', 'Nautilus', 'Balzac', 'Stendhal', 'Centre Saint-Victor', 'Eloi Morel', 
'Parc Saint-Pierre', 'Hortillonages', 'Alsace Lorraine', 'Gare du Nord, Quai D', 'Otages', 'Cirque Jules Verne, Quai A', 'Nicole Fontaine, Quai B', 'Simone Veil, Quai A', 
'Quatre Chênes', 'Libération, Quai A', 'Quatre Lemaire', 'Ambroise Paré', 'Rotonde', 'CHU A. Picardie, Quai C', 'CHU A. Picardie, Quai A', 'Laënnec, Quai A', 'Résidence du Thil', 'IUT');

$arrets_N2_IUT = array('La Paix', 'Chardin', 'Pôle d\'Échanges Nord, Quai A', 'Colvert', 'Nautilus', 'Balzac', 'Stendhal', 'Centre Saint-Victor', 'Eloi Morel', 
'Parc Saint-Pierre', 'Hortillonages', 'Alsace Lorraine', 'Gare du Nord, Quai C', 'Otages', 'Cirque Jules Verne, Quai B', 'Nicole Fontaine, Quai A', 'Simone Veil, Quai B', 
'Quatre Chênes', 'Libération, Quai B', 'Quatre Lemaire', 'Ambroise Paré', 'Rotonde', 'CHU A. Picardie, Quai A', 'CHU A. Picardie, Quai C', 'Laënnec, Quai B', 'Résidence du Thil', 'IUT');
$arrets_N2_IUT = array_reverse($arrets_N2_IUT);


$arrets_N3_Promenade = array('Promenade', 'Centre Commercial Nord, Quai C', 'Romain Rolland', 'Espace Santé', 'Pôle d\'Echanges Nord, Quai C', 'Berlioz', 'Clémenceau', 
'Citadelle François 1er', 'Citadelle Montrescu, Quai B', 'Vogel, Quai C', 'UPJV Saint-Leu', 'Place du Don', 'Alsace Lorraine', 'Gare du Nord, Quai D', 'Otages', 
'Cirque Jules Verne, Quai D', 'Collège Saint-Martin', 'Delpech, Quai A', 'Cité-Providence', 'Charassain', 'Aquapôle', 'Pôle des cliniques', 'Georges Beauvais', 
'Espagne', 'Grèce', 'I.M.E', 'Centre Commercial Sud');

$arrets_N3_Centre_Commercial_Sud = array('Promenade', 'Centre Commercial Nord, Quai C', 'Romain Rolland', 'Espace Santé', 'Pôle d\'Echanges Nord, Quai C', 'Berlioz', 'Clémenceau', 
'Citadelle François 1er', 'Citadelle Montrescu, Quai B', 'Vogel, Quai C', 'UPJV Saint-Leu', 'Place du Don', 'Alsace Lorraine', 'Gare du Nord, Quai D', 'Otages', 
'Cirque Jules Verne, Quai D', 'Collège Saint-Martin', 'Delpech, Quai A', 'Cité-Providence', 'Charassain', 'Aquapôle', 'Pôle des cliniques', 'Georges Beauvais', 
'Espagne', 'Grèce', 'I.M.E', 'Centre Commercial Sud');
$arrets_N3_Centre_Commercial_Sud = array_reverse($arrets_N3_Centre_Commercial_Sud);


$arrets_N4_Pole_Licorne = array('Pôle Licorne', 'Hippodrome', 'Colbert', 'Lucien Fournier', 'Simone Veil, Quai C', 'Nicole Fontaine Quai A', 'Hôtel de Ville', 'Jacobins',
'Émile Zola', 'Gare du Nord, Quai B', 'Caserne Dejean', 'Pinceau', 'Lycée de Luzarches', 'Mons', '3ème D.I.', 'Hôtel des Impôts', 
'Rollin', 'Ormaie', 'Görlitz, Quai A', 'Frédéric Mistral', 'Collège Guy Mareschal', 'Iream', 'Bel Air', 'Wasse', 'Place de Cagny', 'Latapie', 'Longueau SNCF' );

$arrets_N4_Longueau_SNCF = array('Pôle Licorne', 'Hippodrome', 'Colbert', 'Lucien Fournier', 'Simone Veil, Quai C', 'Nicole Fontaine Quai A', 'Maison de la Culture', 'Place du Marché',
'Beffroi', 'Dusevel', 'Palais de Justice', 'René Goblet','Gare du Nord, Quai B', 'Caserne Dejean', 'Pinceau', 'Lycée de Luzarches', 'Mons', '3ème D.I.', 'Hôtel des Impôts', 
'Rollin', 'Ormaie', 'Görlitz, Quai A', 'Frédéric Mistral', 'Collège Guy Mareschal', 'Iream', 'Bel Air', 'Wasse', 'Place de Cagny', 'Latapie', 'Longueau SNCF' );
$arrets_N4_Longueau_SNCF = array_reverse($arrets_N4_Longueau_SNCF);


$ligne_bus = $_GET['bus'];
$arret_bus = $_GET['arret'];
$direction_bus = $_GET['direction'];


if ($ligne_bus == "N1") {
    if ($direction_bus != "Pôle Jules Verne" AND $direction_bus != "Étouvie") {
        header('Location: erreur.php');
    }
    else {
        if ($direction_bus == "Étouvie") {
            if (in_array($arret_bus, $arrets_N1_Etouvie)) {
                $lignepass = urlencode($ligne_bus);
                $directionpass = urlencode($direction_bus);
                $arretpass = urlencode($arret_bus);
                header('Location: validation.php?ligne='.$lignepass.'&direction='.$directionpass.'&arret='.$arretpass.'');
            }
            else {
                header('Location: erreur.php');
            }
        }

        else {
            if (in_array($arret_bus, $arrets_N1_Pole_Jules_Verne)) {
                $lignepass = urlencode($ligne_bus);
                $directionpass = urlencode($direction_bus);
                $arretpass = urlencode($arret_bus);
                header('Location: validation.php?ligne='.$lignepass.'&direction='.$directionpass.'&arret='.$arretpass.'');
            }
            else {
                header('Location: erreur.php');
            }
        }
    }
}

if ($ligne_bus == "N2") {
    if ($direction_bus != "IUT" AND $direction_bus != "La Paix") {
        header('Location: erreur.php');
    }
    else {
        if ($direction_bus == "IUT") {
            if (in_array($arret_bus, $arrets_N2_IUT)) {
                $lignepass = urlencode($ligne_bus);
                $directionpass = urlencode($direction_bus);
                $arretpass = urlencode($arret_bus);
                header('Location: validation.php?ligne='.$lignepass.'&direction='.$directionpass.'&arret='.$arretpass.'');
            }
            else {
                header('Location: erreur.php');
            }
        }

        else {
            if (in_array($arret_bus, $arrets_N2_La_Paix)) {
                $lignepass = urlencode($ligne_bus);
                $directionpass = urlencode($direction_bus);
                $arretpass = urlencode($arret_bus);
                header('Location: validation.php?ligne='.$lignepass.'&direction='.$directionpass.'&arret='.$arretpass.'');
            }
            else {
                header('Location: erreur.php');
            }
        }
    }
}

if ($ligne_bus == "N3") {
    if ($direction_bus != "Promenade" AND $direction_bus != "Centre Commercial Sud") {
        header('Location: erreur.php');
    }
    else {
        if ($direction_bus == "Promenade") {
            if (in_array($arret_bus, $arrets_N3_Promenade)) {
                $lignepass = urlencode($ligne_bus);
                $directionpass = urlencode($direction_bus);
                $arretpass = urlencode($arret_bus);
                header('Location: validation.php?ligne='.$lignepass.'&direction='.$directionpass.'&arret='.$arretpass.'');
            }
            else {
                header('Location: erreur.php');
            }
        }
        else {
            if (in_array($arret_bus, $arrets_N3_Centre_Commercial_Sud)) {
                $lignepass = urlencode($ligne_bus);
                $directionpass = urlencode($direction_bus);
                $arretpass = urlencode($arret_bus);
                header('Location: validation.php?ligne='.$lignepass.'&direction='.$directionpass.'&arret='.$arretpass.'');
            }
            else {
                header('Location: erreur.php');
            }
        }
    }
}

if ($ligne_bus == "N4") {
    if ($direction_bus != "Pôle Licorne" AND $direction_bus != "Longueau SNCF") {
        header('Location: erreur.php');
    }
    else {
        if ($direction_bus == "Pôle Licorne") {
            if (in_array($arret_bus, $arrets_N4_Pole_Licorne)) {
                $lignepass = urlencode($ligne_bus);
                $directionpass = urlencode($direction_bus);
                $arretpass = urlencode($arret_bus);
                header('Location: validation.php?ligne='.$lignepass.'&direction='.$directionpass.'&arret='.$arretpass.'');
            }
            else {
                header('Location: erreur.php');
            }
        }
        else {
            if (in_array($arret_bus, $arrets_N4_Longueau_SNCF)) {
                $lignepass = urlencode($ligne_bus);
                $directionpass = urlencode($direction_bus);
                $arretpass = urlencode($arret_bus);
                header('Location: validation.php?ligne='.$lignepass.'&direction='.$directionpass.'&arret='.$arretpass.'');
            }
            else {
                header('Location: erreur.php');
            }
        }
    }
}

?>