<?php 

$userWord= $_GET["nome"];
$censored= str_replace( $userWord, "***" , $userWord);
$pippo= "Benvenuto" . " " . $censored . " " . "nel primo esercizio su PHP";
$pippoLength= strlen($pippo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>
<body>
    <h1>La parola segreta inserita è: <?php echo $censored ?></h1>
    <h1><?php echo $pippo ?></h1>
    <h1><?php echo $censored ?> Il titolo è lungo: <?php echo $pippoLength ?> caratteri</h1>
</body>
</html>