<?php
$english = [
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six'
    ];

$roll = rand(1,6);

echo '<p>You rolled the number '.$english[$roll] . '.</p>';

if ($roll == 6){
    echo '<p> You Win </p>';
}
else {
    echo '<p> Sorry, you didn\'t win , better luck next time! </p>';
}
?>