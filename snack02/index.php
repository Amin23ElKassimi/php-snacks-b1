<?php


// Con un form passare come parametri GET name, mail e age e verificare 
// (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
// che mail contenga un punto e una chiocciola e che age sia un numero.

//  Se tutto è ok stampare "Accesso riuscito", 
//  altrimenti "Accesso negato"

var_dump($_GET);

$grantedMessage = 'Access granted';
$denialMessage = 'Access denied';

    if ( empty($_GET['name']) && empty($_GET['email']) && empty($_GET['age']) ){
        // Se sono Vute le chiavi cercate nella GET scrivi "denialMessage"
        echo $denialMessage;
    } else {
        // Se invece sono le chiavi cercate nella GET hanno valori, esegui il codice che andra a validare i dati mandati dall'utente.
        if ( strlen($_GET['name']) > 3
            && str_contains($_GET['email'], '.')
            && str_contains($_GET['email'], '@')
            && is_numeric($_GET['age'])){
                // echo è una funzione PHP che stampa il contenuto della variabile indicata 
                echo $grantedMessage; 
        } else {
            echo $denialMessage;
        }
    }

?>


<form action="./index.php" method="GET">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>

    <div>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
    </div>

    <button type="submit">Login</button>
</form>