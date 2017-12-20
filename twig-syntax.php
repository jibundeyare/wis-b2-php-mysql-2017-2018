<?php

require __DIR__.'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, [
    // @note à activer en prod
    // 'cache' => 'var/cache',
]);

$rows = [
    'foo',
    'bar',
    'baz',
    'lorem',
    'ipsum',
];

$item = [
    'name' => 'toto',
];

$rows2 = [
    ['name' => 'foo'],
    ['name' => 'bar'],
    ['name' => 'baz'],
];

$now = new DateTime();
$newYear = new DateTime('2018-01-01 00:00:00');

$template = $twig->load('twig-syntax.html.twig');
echo $template->render([
    'rows' => $rows,
    'item' => $item,
    'rows2' => $rows2,
    'now' => $now,
    'newYear' => $newYear,
]);
