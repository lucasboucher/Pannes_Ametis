<?php
// TRUNCATE TABLE ametis (supprime tt les elmts de la table)

//Connexion à la DB ne surtout pas toucher
$connection=mysqli_connect('sql.xdeo.fr','wla9yx_isn','J5iqjPD39','wla9yx_isn') or die(mysqli_error());
$ligne_bus = $_POST['bus'];
$arret_bus = $_POST['arret'];
$direction_bus = $_POST['direction'];
$req= "INSERT INTO ametis (ligne_bus,arret_bus,direction_bus,heure_bus) values ('$ligne_bus','$arret_bus','$direction_bus','$heure')";

$exe=mysqli_query($connection,$req);

//---------------------------------------------------------------------

$date = date("d-m-Y");
$heure = date("H:i");

if (isset($_POST["Valider"]))
{
  $bus = $_POST["bus"];
  $direction = $_POST["direction"];
  $arret = $_POST["arret"];
}

?>

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
    <h3 class="validation"><i class="fas fa-check"></i>Merci de votre participation !</h3>
    <br><br>
    <div>Récapitulatif de votre signalement :</div>
    <ul class="space">
        <li>
            <span class="title">Ligne de bus :</span>
            <div class="inline">
                <div class="bus-<?php echo $bus; ?>">
                    <div class="line-<?php echo $bus; ?>">
                        <?php echo $bus; ?>
                    </div>
                </div>
            </div>
        </li>
        <li><span class="title">Direction : </span><span class="answer"><?php echo $direction; ?></span></li>
        <li><span class="title">Arrêt : </span><span class="answer"><?php echo $arret; ?></span></li>
        <li><span class="title">Date : </span><span class="answer"><?php echo "$date à $heure"; ?></span></li>
    </ul>
    <hr>
    <div class="center">
        <br><br>
        <button onclick="window.location.href='index.php'"><i class="fas fa-home"></i>Retour à l'accueil</button>
        <br><br>
        <button onclick="window.location.href='controles.php'"><i class="far fa-eye"></i>Liste des signalements</button>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
  <script>
    var options = {

      bottom: '64px', // default: '32px'
      right: 'unset', // default: '32px'
      left: '400px', // default: 'unset'
      time: '0s', // default: '0.3s'
      mixColor: '#fff', // default: '#fff'
      backgroundColor: '#fff', // default: '#fff'
      buttonColorDark: '#100f2c', // default: '#100f2c'
      buttonColorLight: '#fff', // default: '#fff'
      saveInCookies: false, // default: true,
      label: '🌓', // default: ''
      autoMatchOsTheme: true // default: true
    }


    const darkmode = new Darkmode(options);
    darkmode.showWidget();
  </script>

</body>

</html>