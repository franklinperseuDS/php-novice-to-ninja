<?php
if (isset($_POST['joketext'])){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8','ijdbuser','mypassword');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'INSERT INTO `joke` SET `joketext` = "' . $_POST['joketext'] . '", `jokedate` = "2022-03-13"';
        $pdo->exec($sql);

     } catch(PDOException $e){
            $output = ' Database error: '.$e->getMessage() . ' in '. $e->getFile() . ' : ' . $e->getLine();
    }
}else {
    $title = 'Add a new Joke';

    ob_start();

    include __DIR__ .'/../templates/addjokes.html.php';

    $output = ob_get_clean();
}
include __DIR__ . '/../templates/layout.html.php';
