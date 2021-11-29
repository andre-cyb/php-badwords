<?php 

$userWord= $_GET["nome"];
$censored= str_replace( $userWord, "***" , $userWord);
$originalTitle= "Benvenuto ".$userWord." nel primo esercizio su PHP";
$title= "Benvenuto ".$censored." nel primo esercizio su PHP";
$titleLength= strlen($title);

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
    <h1>La parola segreta inserita è: <?php echo $userWord ?></h1>
    <h1><?php echo $originalTitle ?></h1>
    <h1><?php echo $userWord ?> Il titolo è lungo: <?php echo $titleLength ?> caratteri</h1>
    <h1>La parola <?php echo $userWord ?> sarà censurata</h1>
    <h1><?php echo $title ?></h1>
    <h1><?php echo $censored ?> Il titolo è lungo: <?php echo $titleLength ?> caratteri</h1>
</body>
</html>