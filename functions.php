<?php

function randomNumber($min, $max){
    return rand($min, $max);
}

function generatePassword($length){
    $result = ''; //variabile mess di errore
    $password = '';
    $numbers = '0123456789';
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!@#$%^&*()';

  
    $baseString = $letters.$numbers.$symbols;

    //verifico validità lunghezza password
    if(empty($length)){
        $result = 'nessun parametro valido inserito';
    }
    else if($length < 8 || $length > 32){
        $result = 'attenzione! la password deve essere compresa tra 8 e 32 caratteri';
    }
    //ciclo finchè la password non è giusta
    else{
        while(strlen($password) < $length){
            $index = randomNumber(0, strlen($baseString) - 1); //genero indice casuale tra 0 e lunghezza baseString
            $char = $baseString[$index]; //recupero carattere nell indice da quella stringa
            $password.=$char; //concateno la password

        }
        return $password;
    }
}

?>