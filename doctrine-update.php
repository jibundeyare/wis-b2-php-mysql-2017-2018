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

$count = $conn->update('post', [
  'title' => 'Sic dolores',
  'published' => 0,
], ['id' => 1]);
echo $count.'<br />';

// même requête
$sql = "UPDATE post
SET title = :title, published = :published
WHERE id = :id";
$count = $conn->executeUpdate($sql, [
  'title' => 'Veni vidi vici',
  'published' => 1,
   'id' => 1,
]);
echo $count.'<br />';
