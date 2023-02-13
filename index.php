<?php

require __DIR__ . '/functions.php';


if(isset($_GET['passwordLength'])){

    $newPassword = createPassword($_GET['passwordLength']);

    if ($newPassword === true) header('Location: redirectPage.php');

}

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Strong Password Generator</title>
</head>
<body>

<form action="index.php" method="GET">
    <label for="password">Inserisci la lunghezza della password:</label>
    <input name="passwordLength" type="number">
</form>

<?php if(isset($newPassword)){ ?>
            <h4>
                La tua password è: <strong><?= $newPassword ?></strong>
            </h4>
        <?php } ?>
    
</body>
</html>


