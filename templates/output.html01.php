<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script Output</title>
</head>
<body>
    <?php
        if(gettype($output) == 'string'){
           print_r($output);
        }else {
            foreach ($output as $joke){
                echo '<p>'.$joke.'</p>';
            }
        }
      
    ?>
</body>
</html>