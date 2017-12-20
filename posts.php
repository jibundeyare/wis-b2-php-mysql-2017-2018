<?php

use Symfony\Component\Yaml\Yaml;

require __DIR__.'/vendor/autoload.php';

$db = Yaml::parseFile('db.yml');

$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'dbname' => $db['name'],
    'user' => $db['login'],
    'password' => $db['password'],
    'host' => $db['host'],
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, [
    // @note à activer en prod
    // 'cache' => 'var/cache',
]);

$sql = "SELECT * FROM post";
$stmt = $conn->executeQuery($sql);
$rows = $stmt->fetchAll();

$template = $twig->load('posts.html.twig');
echo $template->render([
    'rows' => $rows,
]);
