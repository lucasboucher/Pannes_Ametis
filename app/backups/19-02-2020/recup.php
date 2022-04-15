<?php 
$connection= new PDO('mysql:sql.xdeo.fr;dbname=ametis', 'wla9yx_isn', 'J5iqjPD39', [
    PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

$task = "list";

if(array_key_exists("task", $_GET)){
    $task = $_GET['task'];
}

if($task == "write"){
    postMessage();
} else {
    getMessages();
}


function getMessages(){
    global $connection;

    $resultats = $connection->query("SELECT * FROM ametis ORDER BY heure_bus DESC LIMIT 10");
    $messages = $resultats->fetchAll();
    echo json_encode($messages);

}


?>