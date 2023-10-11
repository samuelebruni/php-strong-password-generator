<?php

/*Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale*/

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