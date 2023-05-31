<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="wrapper">

    <!-- PHP has to be run with a PHP tag <?php ?> Like this. We can run multiple instances of PHP tags in our script -->

    <?php 
        //We can just echo something. This will return the result and not the PHP code
        echo 'Some string data like this';

        //We can also pass html tags through in the string
        echo '<h1> Some string data wrapped in h1 tags</h1>';

        //If we do something in one PHP tag we can do something with it in another PHP tag
        $var = 'Some variable stuff in here';
    ?>

    <hr>

    <?php

        echo $var;
    
    ?>

</div>

</body>
</html>