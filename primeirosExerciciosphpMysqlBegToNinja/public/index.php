<?php
if(!isset($_POST['firstname'])){
    include __DIR__ . '/../templates/form.html.php';
}
else{
    // echo $_POST;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    if ($firstname == 'Kevin' && $lastname == 'Yank'){
        $output = 'Welcome, oh glorious leader!';
    }else{
        $output = 'Welcome to our website, '. htmlspecialchars($firstname,ENT_QUOTES,'UTF-8') . ' '
        . htmlspecialchars($lastname,ENT_QUOTES,'UTF-8') . ' !';
    }

    include __DIR__. '/../templates/welcome.html.php';
}
