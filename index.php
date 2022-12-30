<?php
require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/ola', function(){  // Definindo uma rota get
    echo "Olá Mundo";
});

$app->get('/hello', function(){  // Definindo uma rota get
    echo "Hello World";
});

$app->run();
?>