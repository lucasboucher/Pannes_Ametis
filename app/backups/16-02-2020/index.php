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
    <h2>Contrôle Ametis</h2><i class="fas fa-bus-alt icon-right"></i>
    <h3>Bienvenue !</h3>
    <br><br>
    <button onclick="window.location.href='controles.php'"><i class="far fa-eye"></i>Liste des signalements</button>
    <br><br>
    <button onclick="window.location.href='signalement.php'"><i class="far fa-edit"></i>Signaler un contrôle</button>
    <br><br>
    <hr>
    <h4>Contactez-nous :</h4>
    <button onclick="window.location.href='https://www.google.fr/'"><i class="fas fa-envelope"></i></i>Par mail</button>
    <button onclick="window.location.href='https://www.google.fr/'"><i class="fab fa-twitter"></i>Twitter</button>
    <br><br>
    <hr>
    <br><br><br>
    <button onclick="window.location.href='map.html'">Carte</button>
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