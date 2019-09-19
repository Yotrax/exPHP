<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(isset($_GET["t"]))
    {
        $x = $_GET["t"];
        ?> <h1>Table de <?php echo $x ?></h1>
        <?php
    }

    for ($i = 1; $i <= 10; $i++)
    {
        ?>
       <p> <?php echo $x ." x ". $i . " = " . $x * $i; ?> </p>
       <?php
    }
    ?>
</body>
</html>