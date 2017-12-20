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

$count = $conn->insert('post', [
  'title' => 'Leo verba fecit',
  'body' => 'Lorem ipsum',
  'published' => 1,
]);
echo $count.'<br />';
