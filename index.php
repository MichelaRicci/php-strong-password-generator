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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Strong Password Generator</title>
</head>
<body>

<form class="ms-3" action="index.php" method="GET">
    <div  class="py-2">
        <label for="password">Inserisci la lunghezza della password:</label>
    </div>
    <div class="py-2">
        <input name="passwordLength" type="number">
    </div>
    <div  class="py-2">
        <button type="submit" class="btn btn-primary">Invia</button>
    </div>
</form>

<?php if(isset($newPassword)){ ?>
            <h4>
                La tua password è: <strong><?= $newPassword ?></strong>
            </h4>
        <?php } ?>
    
</body>
</html>


