<?=
include 'functions.php';


session_start();

echo createPassword($_SESSION['characters'], $_SESSION['passwordLength']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targhet page</title>
</head>
<body>
    
<h4></h4>
</body>
</html>