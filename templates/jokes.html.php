<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of jokes</title>
</head>
<body>
    <?php foreach ($jokes as $joke) : ?>
                    <blockquote>
                        <p>
                          <?php echo htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>   
                         </p>
                    <form action="deletejoke.php" method="post">
                        <input type="hidden" name="id" value=<?=$joke['id']?>>
                        <input type="submit" value="Delete">
                    </form>
                    </blockquote>
    <?php endforeach;?>
</body>
</html>