<?php
// selecionando a url e quebrando por / 
$getUrl = explode('/', $_SERVER['REQUEST_URI']);
// selecionando o tipo e quebrando por .
$getType = explode('.', $getUrl[3]);
// selecionando o id e quebrando por =
$id = explode('=', $_SERVER['REQUEST_URI']);
// de acordo com as solicitações da API selecionando um tipo e um Id
$apiPage = "https://api.jikan.moe/v3/$getType[0]/{$id[1]}";
//recebe api em forma de objeto e converte para json
$animePage = json_decode(file_get_contents($apiPage));
