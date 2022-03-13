<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8','ijdbuser','mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'CREATE TABLE joke ( `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            joketext TEXT,
            jokedate DATE NOT NULL
            ) ';

    $pdo->exec($sql);

    $output ='Joke table successfully created.';
    
}
catch(PDOException $e){
    $output = ' Database error: '.$e->getMessage() . ' in '. $e->getFile() . ' : ' . $e->getLine();
}

include __DIR__ . '/../templates/output.html.php';