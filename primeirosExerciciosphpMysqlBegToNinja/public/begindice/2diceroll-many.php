<?php
$winCount = 0;
for($count =1 ; $count <=10; $count++){
    $roll = rand(1,6);
    echo 'You rolled a '. $roll;

    if ($roll == 6){
        echo '<p>You Win!!</p>';
        $winCount++;
    }else{
        echo '<p>Sorry, you didn\'t win,  better luck next Time </p>';
    }

    echo " <p> Thanks for playing , you win $winCount times</p>";
}
