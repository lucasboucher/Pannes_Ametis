<?php
    // TRUNCATE TABLE ametis (supprime tt les elmts de la table)

    //Connexion à la DB ne surtout pas toucher
    $connection=mysqli_connect('db','root','password','data') or die(mysqli_error());
    $ligne_bus = $_GET['ligne'];
    $arret_bus = $_GET['arret'];
    $direction_bus = $_GET['direction'];
    $heure_bus = date("H:i:s");
    $ip = $_SERVER["REMOTE_ADDR"];
    //---------------------------------------------------------------------
    
    if (empty($ip) == true) {
        header('Location: erreur.php');
    }
    else {
        $adip = "INSERT INTO ip (AdresseIp) values ('$ip')"; 
    }
        
    if (empty($ligne_bus) == true OR empty($direction_bus) == true OR empty($arret_bus) == true) {
        header('Location: erreur.php');
    }
    else {
        $req= "INSERT INTO ametis (ligne_bus,arret_bus,direction_bus,heure_bus) values ('$ligne_bus','$arret_bus','$direction_bus','$heure_bus')";
        $exe=mysqli_query($connection,$req);
        $date = date("d-m-Y");
    }

?>

<!DOCTYPE html>
<html>

<head>
  <title>Projet ISN</title>
  <link href="style.css" rel="stylesheet">
  <link rel="icon" href="favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/608a42f9ee.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>


<body>
    <div class="validation">
        <i class="fas fa-check btn-icon"></i>Merci de votre participation !
    </div>
    <br><br>
    <div>Récapitulatif de votre signalement :</div>
    <ul class="height">
        <li>
            <span class="titre">Ligne de bus :</span>
            <div class="inline">
                <div class="bus-<?php echo $ligne_bus; ?>">
                    <div class="line-<?php echo $ligne_bus; ?>">
                        <?php echo $ligne_bus; ?>
                    </div>
                </div>
            </div>
        </li>
        <li><span class="titre">Direction : </span><span class="answer"><?php echo $direction_bus; ?></span></li>
        <li><span class="titre">Arrêt : </span><span class="answer"><?php echo $arret_bus; ?></span></li>
        <li><span class="titre">Date : </span><span class="answer"><?php echo "$date à $heure_bus"; ?></span></li>
    </ul>
    <hr>
    <div class="back-menu">
        <button class="button" onclick="window.location.href='index.php'"><i class="fas fa-home btn-icon"></i>Retour à l'accueil</button>
        <button class="button" onclick="window.location.href='controles.php'"><i class="far fa-eye btn-icon"></i>Liste des signalements</button>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
  <script type="text/javascript" src="darkmode.js"></script>

</body>

</html>