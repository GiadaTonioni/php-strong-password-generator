<?php 

include __DIR__.'/functions.php';

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
                <?php if(isset($response)) { ?>
                    <div class="alert alert-info">
                        <?php echo $response; ?>
                    </div>
                <?php } ?>
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

