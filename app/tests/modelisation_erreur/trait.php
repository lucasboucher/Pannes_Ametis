<?php
$ligne_bus = $_GET['bus'];
$test = array('Paul', 'Pôle');

if (in_array($ligne_bus, $test)) {
    $bustest = urlencode($ligne_bus);
    header('Location: oui.php?ligne='.$bustest.'');
}
else {
    header('Location: non.php?ligne='.$ligne_bus.'');
}
?>