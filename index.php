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
            $number = randomNumber(0, strlen($baseString) - 1); //genero indice casuale tra 0 e lunghezza baseString
            $char = $baseString[$index]; //recupero carattere nell indice da quella stringa
            $password.=$char; //concateno la password

        }
        return $password;
    }
}

if(isset($_GET['length'])){
    $response = generatePassword($_GET['length']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(isset($response)) {?>
                    <div class="alert alert-info">
                        <?php echo $response; ?>
                    </div>
                <?php} ?>
                <form action="index.php" method="GET">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="length" class="control-label">Lunghezza</label>
                            <input type="number" id="length" name="length" placeholder="lunghezza" class="form-control">
                        </div>
                        <div class="col-12 col-md-6">
                            <button type="submit" class="btn btn-primary float-end">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

