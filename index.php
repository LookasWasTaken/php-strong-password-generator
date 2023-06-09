<?php

include __DIR__ . '/helpers/functions.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Strong Password Generator</title>
</head>

<body class="bg-dark text-light">
    <div class="container my-3">
        <div class="row my-3">
            <div class="col-12 my-3">
                <h1>Strong Password Generator</h1>
            </div>
            <div class="col-6 my-3">
                <form class="p-3 bg-light text-dark rounded" action="index.php" method="get">
                    <div class="mb-3 d-flex align-items-center gap-3">
                        <label for="length" class="form-label">Length</label>
                        <input type="number" min="3" max="14" class="form-control" name="length" id="length" aria-describedby="helpId" placeholder="How many characters will your password have?">
                    </div>
                    <div class="d-flex justify-content-between align-item-center">
                        <h6>Allows one or more repetitions</h6>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="repetitions" id="radio1" checked>
                                <label class="form-check-label" for="radio1">
                                    Si
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="repetitions" id="radio2">
                                <label class="form-check-label" for="radio2">
                                    No
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="lettere">
                                <label class="form-check-label" for="lettere">
                                    Lettere
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="numeri">
                                <label class="form-check-label" for="numeri">
                                    Numeri
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="simboli">
                                <label class="form-check-label" for="simboli">
                                    Simboli
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
            <div class="col-12 mx-auto">
                <h2>Your password is <?= $password ?></h2>
            </div>
        </div>
    </div>
    <!-- EXTERNAL BOOTSTRAP JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>