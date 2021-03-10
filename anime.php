<?php include('./seeMore.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Details</title>
</head>

<body>
  <div class="text-center">
    <a href="index.php"><img class=" mx-3 text" src="images/logo.png" style="width:3rem;" alt="logo Sharingan">Voltar</a>
  </div>
  <div class="container">
    <div class="newCard">
      <h2><?php echo ($animePage->title); ?></h2>
      <div class="grid">
        <img src="<?php echo ($animePage->image_url); ?>" alt="imagem de capa anime <?php echo ($animePage->title); ?> " srcset="">
        <div class="description">
          <p><b>Title english: </b><?php echo ($animePage->title_english); ?></p>
          <p><b>Title japanese: </b><?php echo ($animePage->title_japanese); ?></p>
          <p class="text-justify"><b>Synopsis: </b><?php echo ($animePage->synopsis); ?></p>
        </div>
      </div>
      <h3>Other information</h3>
      <div class="others">
        <p><b>Type: </b><?php echo ($animePage->type); ?></p>
        <p><b>Status: </b><?php echo ($animePage->status); ?></p>
        <p><b>Premiered: </b><?php echo ($animePage->premiered); ?></p>

        <p><b>Score: </b><?php echo ($animePage->score); ?> points</p>
        <p><b>Aired: </b><?php echo ($animePage->aired->prop->from->day . '/' . $animePage->aired->prop->from->month . '/' . $animePage->aired->prop->from->year); ?>
          to <?php echo ($animePage->aired->prop->to->day . '/' . $animePage->aired->prop->to->month . '/' . $animePage->aired->prop->to->year); ?></p>
        <p><b>Rating: </b><?php echo ($animePage->rating); ?></p>

        <p><b>Number of episodes: </b><?php echo ($animePage->episodes); ?></p>
      </div>
    </div>
  </div>
</body>

</html>
