$(document).ready(function(){
    recupMessages();
function recupMessages()
{
    $.post('recup.php',function(data){
        $('.afficher').html(data);
    });
}

setInterval(recupMessages,1000);

});