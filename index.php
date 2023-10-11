<?php

include './function.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body class="bg-success">
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <h1 class="py-5 px-2">Genera una Password sicura!</h1>
        <h1><?php echo $message?></h1>
        <form class="mb-3 w-50 d-flex flex-column align-items-center gap-2" methods="GET">

            <input type="text" name="password_lenght" id="password_lenght" class="form-control text-center" placeholder="Digita qui il numero dei caratteri..">
            <input class="btn btn-danger" type="submit" value="Vai">

        </form>
        
    </div>
</body>
</html>