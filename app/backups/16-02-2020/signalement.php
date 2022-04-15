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
    <form action="validation.php" method="post">    
        <label for="bus">Sélectionner la ligne contrôlée : </label>
        <br><br>
        <div class="darkmode-ignore">
            <div class="bus-select">
                <input type="radio" id="bus_n1" name="bus" value="N1" required>
                <label class="n1-select" for="bus_n1">N1</label>
                <input type="radio" id="bus_n2" name="bus" value="N2" required>
                <label class="n2-select" for="bus_n2">N2</label>
                <input type="radio" id="bus_n3" name="bus" value="N3" required>
                <label class="n3-select" for="bus_n3">N3</label>
                <input type="radio" id="bus_n4" name="bus" value="N4" required>
                <label class="n4-select" for="bus_n4">N4</label>
            </div>
        </div>
        <br><br><br>
        <label for="direction">Dans quelle direction va-t-il ?</label><br><br>
        <input type="text" placeholder="La direction du bus..." name="direction" id="direction" required><br><br><br>
        <label for="arret">Vers quel arrêt vous trouvez-vous ?</label><br><br>
        <input type="text" placeholder="L'arrêt du contrôle..." name="arret" id="arret" required><br><br><br><br>
        <input type="submit" name="Valider" value="ENVOYER">
    </form>
    <br><br>
    
<!-- Bout de code html à récupérer pour intégrer non remplissement de champ en PHP -->
    <i class="fas fa-exclamation-triangle icon-warn"></i><p>Vous avez oublié de remplir ce champ.</p>

    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
    <script>
        var options = {
        bottom: '64px', // default: '32px'
        right: 'unset', // default: '32px'
        left: '400px', // default: 'unset'
        time: '0s', // default: '0.3s'
        mixColor: '#fff', // default: '#fff'
        backgroundColor: '#fff',  // default: '#fff'
        buttonColorDark: '#100f2c',  // default: '#100f2c'
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