<?php

//verifica se foi clicado o botão pesquisar
if (isset($_POST['btSearch'])) {
  //recebendo a pesquisa
  $anime = $_POST['anime'];
  //retirando os espaçõs em branco
  $anime = str_replace(' ', '', $anime);
  //recebendo o tipo da pesquisa
  $type = $_POST['type'];
  //chamando a funão getApiJikan
  getApiJikan();
  //ternário para definir o tipo, if em uma linha
  $typeFilter = ($type == 'anime') ? 'anime.php?mal_id=' : 'manga.php?mal_id=';
}
//manipulando a url da Api/utiliza global para reutilizar a Variavel que foi usada no if
function getApiJikan() {
  global $type;
  global $anime;
  global $animes;
  //inserindo as variavéis na url da api
  $url = "https://api.jikan.moe/v3/search/{$type}?q={$anime}";
  //transformando objeto em json
  $animes = json_decode(file_get_contents($url));
}
