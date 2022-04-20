
<!DOCTYPE html>
<html>
<body>

<h2>Contrôle Ametis</h2>

<form action="index.php" method="post">
  <label for="bus-select">Quelle est le bus contrôlé ?</label>
  <select name="bus" id="bus-select" required>
      <option value="N1">N1</option>
      <option value="N2">N2</option>
      <option value="N3">N3</option>
      <option value="N4">N4</option>
  </select>
  <br><br>
  <button class="button">Green</button>
  <button class="button button2">Blue</button>
  <button class="button button3">Red</button>
  <button class="button button4">Gray</button>
  <button class="button button5">Black</button>
  <br><br>
  <label for="direction">Il se dirige vers :</label>
  <input type="direction" name="direction" id="direction" required><br><br>
  <input type="submit" name="Valider" value="Envoyer"><br><br>
</form>

<?php
if (isset($_POST["Valider"]))
{
  $bus = $_POST["bus"];
  $direction = $_POST["direction"];
  
  echo 'Vous avez choisi le <strong>' . $bus . '</strong><br>';
  echo 'Il se dirige vers <strong>' . $direction . '</strong>';
}
?>

</body>
</html>
