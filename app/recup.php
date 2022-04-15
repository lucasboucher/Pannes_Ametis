<?php
$connection=mysqli_connect('db','root','password','data') or die(mysqli_error());

$messages = array();

$recup_messages = $connection->query("SELECT * FROM ametis ORDER BY id DESC LIMIT 10");

while($all = $recup_messages->fetch_assoc())
{
    $messages[] = $all;
}

foreach($messages as $message){
    $date1 = $message['heure_bus'];
    $date2 = strtotime($date1);
    $mydate1 = date("H:i:s");
    $mydate2 = strtotime($mydate1);
    if (gmdate("H", $mydate2-$date2) < 1) {
        $horaire = gmdate("i", $mydate2-$date2);
        $horaire = intval($horaire);
        echo '<div class="horodatage">Il y a ' . $horaire . ' minutes :</div>';
        echo '<div class="float">';
        echo     '<div class="bus-'.$message['ligne_bus'].'">';
        echo         '<div class="line-'. $message['ligne_bus'] .'">';
        echo            $message['ligne_bus'];
        echo         '</div>';
        echo     '</div>';
        echo '</div>';
        echo '<div class="infos">';
        echo    '<span class="titre">Direction : </span>';
        echo    $message['direction_bus'];
        echo    '<br>';
        echo    '<span class="titre">Arrêt : </span>';
        echo    $message['arret_bus'];
        echo '</div>';
        echo '<br>';
        echo '<hr>';
        echo '<br><br>';
    }
}
?>