<?php

    $roll = rand(1,6);
    echo 'You rolled a '. $roll;

    if ($roll >4){
        echo '<p>You Win!!</p>';
        
    }else{
        echo '<p>Sorry, you didn\'t win,  better luck next Time </p>';
    }


