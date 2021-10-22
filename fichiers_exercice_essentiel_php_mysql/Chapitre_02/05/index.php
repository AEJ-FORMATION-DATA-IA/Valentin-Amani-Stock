<?php
$name = 'Julian';
$title = 'Title';
$welcome = 'Prénom :';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1><?php echo $welcome . ' ' . $name ?></h1>
    <p>Exemple HTML</p>
</div>

</body>
</html>