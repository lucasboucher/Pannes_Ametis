<?php
$connection=mysqli_connect('sql.xdeo.fr','wla9yx_isn','J5iqjPD39','wla9yx_isn') or die(mysqli_error());
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
    <a href="index.php"><i class="fas fa-arrow-left icon-left"></i></a>
    <h2>Contrôle Ametis</h2>
    <h3>Liste des contrôles signalés</h3>
    <br><br>


    <div class="horodatage">Il y a 4 minutes :</div>
    <?php 
        $bus1 = $connection->query('SELECT ligne_bus FROM ametis LIMIT 0, 1'); 
        while ($ligne_bus1 = $bus1->fetch_assoc())
        {
        $busline1 = $ligne_bus1['ligne_bus'];
        }
    ?>
    <div class="float">
        <div class="bus-<?php echo $busline1;?>">
            <div class="line-<?php echo $busline1;?>">
                <?php echo $busline1;?>
            </div>
        </div>
    </div>
    <div class="infos">
        <span class="title">Arrêt :</span>
        <?php 
            $arret1 = $connection->query('SELECT arret_bus FROM ametis LIMIT 0, 1'); 
            while ($arret_bus1 = $arret1->fetch_assoc())
            {
            echo $arret_bus1['arret_bus'];
            }          
        ?>
        <br>
        <span class="title">Direction :</span>
        <?php 
            $direction1 = $connection->query('SELECT direction_bus FROM ametis LIMIT 0, 1'); 
            while ($direction_bus1 = $direction1->fetch_assoc())
            {
	        echo $direction_bus1['direction_bus'];
            }          
        ?>
    </div>


    <br>
    <hr>
    <br><br>


    <div class="horodatage">Il y a 4 minutes :</div>
    <?php 
        $bus2 = $connection->query('SELECT ligne_bus FROM ametis LIMIT 1, 2'); 
        while ($ligne_bus2 = $bus2->fetch_assoc())
        {
        $busline2 = $ligne_bus2['ligne_bus'];
        }
    ?>
    <div class="float">
        <div class="bus-<?php echo $busline2;?>">
            <div class="line-<?php echo $busline2;?>">
                <?php echo $busline2;?>
            </div>
        </div>
    </div>
    <div class="infos">
        <span class="title">Arrêt :</span>
        <?php 
            $arret2 = $connection->query('SELECT arret_bus FROM ametis LIMIT 2, 2'); 
            while ($arret_bus2 = $arret2->fetch_assoc())
            {
            echo $arret_bus2['arret_bus'];
            }          
        ?>
        <br>
        <span class="title">Direction :</span>
        <?php 
            $direction2 = $connection->query('SELECT direction_bus FROM ametis LIMIT 2, 2'); 
            while ($direction_bus2 = $direction2->fetch_assoc())
            {
	        echo $direction_bus2['direction_bus'];
            }          
        ?>
    </div>


    <br>
    <hr>
    <br><br>


    <div class="horodatage">Il y a 4 minutes :</div>
    <?php 
        $bus3 = $connection->query('SELECT ligne_bus FROM ametis LIMIT 2, 3'); 
        while ($ligne_bus3 = $bus3->fetch_assoc())
        {
        $busline3 = $ligne_bus3['ligne_bus'];
        }
    ?>
    <div class="float">
        <div class="bus-<?php echo $busline3;?>">
            <div class="line-<?php echo $busline3;?>">
                <?php echo $busline3;?>
            </div>
        </div>
    </div>
    <div class="infos">
        <span class="title">Arrêt :</span>
        <?php 
            $arret3 = $connection->query('SELECT arret_bus FROM ametis LIMIT 3, 3'); 
            while ($arret_bus3 = $arret3->fetch_assoc())
            {
            echo $arret_bus3['arret_bus'];
            }          
        ?>
        <br>
        <span class="title">Direction :</span>
        <?php 
            $direction3 = $connection->query('SELECT direction_bus FROM ametis LIMIT 3, 3'); 
            while ($direction_bus3 = $direction3->fetch_assoc())
            {
	        echo $direction_bus3['direction_bus'];
            }          
        ?>
    </div>


    <br>
    <hr>
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
            saveInCookies: true, // default: true,
            label: '🌓', // default: ''
            autoMatchOsTheme: true // default: true
        }

        const darkmode = new Darkmode(options);
        darkmode.showWidget();
    </script>

</body>

</html>