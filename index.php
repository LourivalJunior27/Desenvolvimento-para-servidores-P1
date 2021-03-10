<!-- trazendo a pagina jikan para a index -->
<?php include('./jikan.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>P1 - API Jikan</title>
</head>

<body style="background-color: darkgrey;">
  <div class="text-center" >
  <a href="../../index.php"><img class="my-3" src="./images/logo.png" style="width:7rem"alt="logo animes"></a>

    <form action="" method="post">
      <div>
        <input name="anime" type="text" placeholder=" Please enter a title">
        <button name="btSearch" class="btSearch" type="submit">Search</button>
      </div>

      <div class="gridFilter">
        <p class="filter">Filter:</p>
        <select class="options" name="type" id="">
          <option value="anime" selected>Anime</option>
          <option value="manga">Mangá</option>
        </select>
      </div>

    </form>
  </div>

  <div class="container row mx-auto mt-3">
    <!-- isset se é diferente de vazia -->
    <?php if (isset($animes)) {      
      // acessando resultados dentro de animes 
      foreach ($animes->results as $value) { ?>
        <div class="card col-4 my-2 px-1">
          <div class='text-center'>
            <img class="rounded mt-1" src="<?php echo $value->image_url; ?>" alt="imagem ilustrativa do anime pesquisado">
          </div>
          <div class="justify-content-center">
            <h2><?php echo $value->title; ?></h2>
            <p class="text-justify"><?php echo $value->synopsis; ?></p>
            <p class="seeMore" name="seeMore"><a href="<?php echo $typeFilter . $value->mal_id; ?>">see more...</a></p>
          </div>
        </div>
    <?php }
    } ?>

  </div>

</body>

</html>
