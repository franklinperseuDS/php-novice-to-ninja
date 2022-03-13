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
                <?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8') ?>     
            </p>  
        </blockquote>
    <?php endforeach;?>
    
    
</body>
</html>