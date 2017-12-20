<?php

require __DIR__.'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, [
    // @note à activer en prod
    // 'cache' => 'var/cache',
]);

$greeting = 'Hello Twig!';

$template = $twig->load('hello-twig.html.twig');
echo $template->render([
    'greeting' => $greeting,
]);
