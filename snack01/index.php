<?php
// Codice PHP

// Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, 
// punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
//  Stampiamo a schermo tutte le partite con questo schema:

// Olimpia Milano - Cantù | 55-60

$matches = [
    [
        'team1' => 'Acqua S.Bernardo Cantù',
        'team2' => 'Oriora Pistoia',
        'point_team_1' => 70,
        'point_team_2' => 45
    ],
    [
        'team1' => 'Fortitudo Pompea Bologna',
        'team2' => 'Dolomiti Energia Trentino',
        'point_team_1' => 82,
        'point_team_2' => 83
    ],
    [
        'team1' => 'Pallacanestro Trieste',
        'team2' => 'Virtus Roma',
        'point_team_1' => 72,
        'point_team_2' => 33
    ],
    [
        'team1' => 'Openjobmetis Varese',
        'team2' => 'Germani Basket Brescia',
        'point_team_1' => 101,
        'point_team_2' => 99
    ],
];

?>

<ul>
    <?php foreach ( $matches as $match ) { ?>
        <li>
            <pre>
                <?php echo  $match['team1'] . ' - ' . $match['team2']. ': ' . $match['point_team_1'] . ' - ' . $match['point_team_2']; ?>; ?>
            </pre>
        </li>
    <?php } ?>
</ul>