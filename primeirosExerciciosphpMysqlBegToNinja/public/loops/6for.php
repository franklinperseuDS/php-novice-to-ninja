<?php

for ($count = 1; $count <=10; $count++){
    $roll = rand(1,6);
    echo '<p>You rolled a '.$roll.' </p>';
    if($roll == 6){
        echo '<p>You Win </p>';
    }
    else {
        echo '<p> Sorry , you didn\'t win, better luck next time';
    }

    echo '<p> Thanks for playing </p>';
}
?>