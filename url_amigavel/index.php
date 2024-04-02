<?php

echo "página index.php<br><br>";

define('URL', 'http://localhost/github/url_amigavel/');

$url = (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)) ? filter_input(INPUT_GET, 'url', FILTER_DEFAULT) : 'home');
var_dump($url);

echo '<br>';

$url = array_filter(explode('/', $url));
var_dump($url);

echo '<br>';

$arquivo = $url[0] . '.php';
var_dump($arquivo);

echo '<hr>';

if (is_file('menu.php'))
  include 'menu.php';

if (is_file($arquivo)) {
  include $arquivo;
} else {
  if (is_file('404.php'))
    include '404.php';
}
