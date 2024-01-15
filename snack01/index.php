<?php
// Codice PHP

// Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, 
// punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
//  Stampiamo a schermo tutte le partite con questo schema:

// Olimpia Milano - Cantù | 55-60





$array = [

    "partita01" => [
        "Roma" => 10,
        "Milano" => 4,
    ],
    "partita02" => [
        "Napoli" => 5,
        "Madrid" => 2,
    ],
    "partita03" => [
        "Londra" => 20,
        "Parigi" => 12,
    ],
    "partita04" => [
        "Casablanca" => 33,
        "Marrakech" => 20,
    ],
    "partita05" => [
        "Bologna" => 22,
        "Bergamo" => 43,
    ],
];



?>


<div>

<ul>
<?php 
        foreach ($array as $x)?>
<li>
<?php echo "$x <br>";?>
</li>

</ul>

  





</div>
