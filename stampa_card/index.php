<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="conteiner">
    <div class="card">
        <div class="conteiner-img">
            <img class="poster" src="<?php echo $movie1->poster ?>" alt="">
        </div>
        <div class="testo">
            <?php echo $movie1->nome ?>
        </div>
        <div class="testo">
            <?php echo $movie1->anno ?>
        </div>
        <div class="testo">
            <?php echo $movie1->regista ?>
        </div>
    </div>

    <div class="card">
        <div class="conteiner-img">
            <img class="poster" src="<?php echo $movie2->poster ?>" alt="">
        </div>
        <div class="testo">
            <?php echo $movie2->nome ?>
        </div>
        <div class="testo">
            <?php echo $movie2->anno ?>
        </div>
        <div class="testo">
            <?php echo $movie2->regista ?>
        </div>
    </div>

    </div>

    </div>
   


</body>

</html>