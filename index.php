<?php

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
                <h3>Genera una password sicura</h3>
            </div>
            <div class="col-6 my-3">
                <form class="p-3 bg-light text-dark rounded" action="functions.php" method="get">
                    <div class="mb-3 d-flex align-items-center gap-3">
                        <label for="" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="inserisci una password">
                    </div>
                    <div class="d-flex justify-content-between align-item-center">
                        <h6>Consenti una o più ripetizioni</h6>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ripetizioni" id="radio1">
                                <label class="form-check-label" for="radio1">
                                    Si
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ripetizioni" id="radio2" checked>
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
        </div>
    </div>
    <!-- EXTERNAL BOOTSTRAP JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>