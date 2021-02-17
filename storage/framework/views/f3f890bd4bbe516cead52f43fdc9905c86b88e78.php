<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kompletowanie_podzespołów</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_welcome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<!-- Strona główna-->

<body id="strona_główna">
<body background="../images/tło_układ_scalony.jpg" alt="układ_scalony" ></body>
<main class="main-content" id="main-content" role="main">
    <div class="container-fluid" id="start">

        <div class="napis_glowny" id="napis">

            <div style="padding-bottom: 10%">
                <h1 id="h1" >Witaj w aplikacji do kompletowania podzespołów!</h1>
            </div>
            <a href="<?php echo e(url('firststep')); ?>"><button type="submit" class="btn btn-danger" id="zaczynajmy">Rozpocznij!</button></a>
             
            <?php echo e(Cart::destroy()); ?>

           



            <div style="padding-top:2%">
                <h1 id="h2">Aby rozpocząć naciśnij przycisk "Rozpocznij!".</h1>
            </div>

        </div>
    </div>
</main>
</body>
</html>
<?php /**PATH C:\Users\Kitsune\Desktop\projekty\Norbert\ProjektInzynierski\resources\views/welcome.blade.php ENDPATH**/ ?>