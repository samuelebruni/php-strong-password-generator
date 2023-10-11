<?php
//recupero il numero che l'utente inserirà nel form
$password_lenght = $_GET["password_lenght"];

//stampo un messaggio iniziale all'apertura della pagina che varierà appena l'utente azionerà il 'submit', a patto che inserisca un numero
$message = "👇 Inserire il numero nella barra sottostante 👇";

function password_generator($password_lenght)
{
    //variabile contenenete tutti i caratteri che scelti a random generereranno la password
    $all_characthers = "abcdefghilmnopqrstuvzxywjkABCDEFGHILMNOPQRSTUVZXYWJK1234567890!$%&/()=?-_,;.:@#[+*]";

    //variabile vuota che si popolerà con l'avvio del ciclo while
    $password = "";


    while (strlen($password) < $password_lenght) {
        $generate_password = rand(0, strlen($all_characthers) - 1);

        $character_password = $all_characthers[$generate_password];

        $password .= $character_password;
    }

    return $password;
};



if (isset($_GET["password_lenght"])) {
    $message = 'La tua password generata è la seguente: 👉'. ' ' . password_generator($password_lenght);
}
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