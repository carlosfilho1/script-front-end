<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home</title>
</head>

<body>
    <div class="row container-fluid vh-100">
        <div class="col-md-2 d-none d-sm-none d-md-block ">
            <?php
            include './menu.php';
            ?>
        </div>

        <div class="col-md-10">
            <div class="row p-3" style="background-color: blue;">

            <?php
            include './offcanvas.php';
            ?>

            </div>

            <h1>Seja Bem Vindo ao Sistema</h1>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/calc.js"></script>
</body>

</html>