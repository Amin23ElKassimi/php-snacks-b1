<?php


// Con un form passare come parametri GET name, mail e age e verificare 
// (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
// che mail contenga un punto e una chiocciola e che age sia un numero.

//  Se tutto è ok stampare "Accesso riuscito", 
//  altrimenti "Accesso negato"



$mail = 'amin@yaho.com';
$age = 22;


?>


<form action="./server.php" method="GET">

<?php

$name = 'pippo';
if (strlen(string $name) < 3) {
  echo "Have a good day!";
}
else{
    echo "see you";
}
?>


</form>