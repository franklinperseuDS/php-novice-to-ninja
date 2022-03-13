<?php

    $roll1 = rand(1,6);
    $roll2 = rand(1,6);
    echo 'You rolled a '. $roll1.' and '.$roll2;

    if ($roll1 == 6 || $roll2 == 6){
        echo '<p>You Win!!</p>';
        
    }else{
        echo '<p>Sorry, you didn\'t win,  better luck next Time </p>';
    }
echo '<p> Thanks for playing</p>';

