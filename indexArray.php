<?php

for($i = 0; $i < 10; $i ++ ) {
    echo "$i <br>";
}

echo "<br>";

for($j = 10; $j >= 0; $j -- ) {
    echo "$j <br>";
}

echo "<br>";

for($k = 10; $k > -10; $k -= 3) {
    echo "$k <br>";
}

echo "<br>";

$firstPokemon = 'Bulbizarre';

function myStarter (string $pokemonStarter): string
{
    if($pokemonStarter === 'Bulbizarre') {
        return "Bon choix";
    }

    if ($pokemonStarter === 'Salamèche') {
        return "Tu n'as aucune personnalité";
    }

    return "Ah c'est donc $pokemonStarter ?";
};

echo myStarter($firstPokemon) . "<br>";


$team = ['Bulbizarre', 'Salamèche', 'Carapuce', 'Pikachu'];

$team[] = 'mewtwo';
// array_push($team, "mewtwo");
// array_unshift($team, "mewtwo");


foreach($team as $teamPokemon) {
    echo "$teamPokemon ";
}

echo "<br>";

$team2 = ['Bulbizarre' => 15, 'Salamèche' => 7, 'Carapuce' => 3, 'Pikachu' => 45, 'Mewto' => 100];

//$team2['Bulbizarre'] = 16;

$keys = array_keys($team2);
$values = array_values($team2);
$index = array_search('Bulbizarre', $keys);
array_splice($keys, $index, 1, 'Herbizarre');
array_splice($values, $index, 1, 16);
$team2 = array_combine($keys, $values);

asort($team2);

echo '<ul>';
foreach($team2 as $pokemonName => $level) {
    echo '<li>' . $pokemonName . ':' . $level . '</li>';
}
echo '</ul>';

echo '<ul>';
foreach($team2 as $pokemonName => $level) {
    if($level > 10 && $level < 45) {
    echo '<li>' . $pokemonName . ':' . $level . '</li>';
    }
}
echo '</ul>';


$pokedex = [
    'Plante' => [
        'Bulbizarre', 'Mystherbe', 'Chetiflor'
    ],

    'Eau' => [
        'Carapuce', 'Stari', 'Magicarpe'
    ],

    'Feu' => [
        'Salaméche',
    ],

    'Sol' => [
        'Sabelette', 'Taupiqueur'
    ],
	
    'Electrik' => [
        'Pikachu', 'Magneti', 'Voltorbe'
    ],
];

array_push($pokedex['Feu'], 'Caninos');

array_push($pokedex['Electrik'], 'Pikachu', 'Magneti', 'Voltorbe');



foreach($pokedex as $type => $pokemons) {
    if($type === 'Plante') {
        foreach($pokemons as $pokemon) {
            echo "$pokemon <br>";
        }
    }
};

echo "<br>";

$pokemonCount = count($pokedex['Eau']);

echo "$pokemonCount";