<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8','ijdbuser','mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT `id`,`joketext` FROM `joke`';
    $result = $pdo->query($sql);

    while ($row = $result->fetch()){
        $output[] = ['id' =>$row['id'], 'joketext' =>$row['joketext']];
        
    }
    
}
catch(PDOException $e){
    $output = ' Database error: '.$e->getMessage() . ' in '. $e->getFile() . ' : ' . $e->getLine();
}

include __DIR__ . '/../templates/output.html.php';