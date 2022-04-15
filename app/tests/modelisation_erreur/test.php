<?php 
$busErr = "";
if (isset($_POST["Valider"])) {
    if (empty($_POST["bus"])) {
        $busErr = 'Vous avez oublié de sélectionner la ligne de bus.';
    }
    else {
        $bustest = urlencode($_POST["bus"]);
        header('Location: trait.php?bus='.$bustest.'');
    }
}
     
?>
<form action="test.php" method="post">
    <label for="bus">Sélectionner la ligne contrôlée :</label>
    <input type="radio" id="bus_n1" name="bus" value="Pôle">
    <label for="bus_n1">Pôle</label>
    <input type="radio" id="bus_n2" name="bus" value="Paul">
    <label for="bus_n2">Paul</label>
    <?php
            if ($busErr != "") {
                echo $busErr;
            }
        ?>
    <input type="submit" name="Valider" value="ENVOYER">
</form>