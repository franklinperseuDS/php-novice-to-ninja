<?php
if (isset($_POST['id'])){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8','ijdbuser','mypassword');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'DELETE FROM `joke` WHERE `id` = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->execute();

        header('location: jokes.php');
     } catch(PDOException $e){
            $output = ' Database error: '.$e->getMessage() . ' in '. $e->getFile() . ' : ' . $e->getLine();
    }
}else {
    $title = 'Delete a Joke';

    ob_start();

    include __DIR__ .'/../templates/addjokes.html.php';

    $output = ob_get_clean();
}
include __DIR__ . '/../templates/layout.html.php';
