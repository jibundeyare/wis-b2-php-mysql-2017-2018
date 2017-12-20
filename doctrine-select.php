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

// requête sans paramètre
// récupération de plusieurs éléments au fur et à mesure
$sql = "SELECT * FROM post";
$stmt = $conn->executeQuery($sql);

while ($row = $stmt->fetch()) {
    echo $row['title'].'<br />';
    echo $row['body'].'<br />';
    echo '<br />';
}

// requête sans paramètre
// récupération de plusieurs éléments en une seule fois
$sql = "SELECT * FROM post";
$stmt = $conn->executeQuery($sql);
$rows = $stmt->fetchAll();

foreach ($rows as $row) {
  echo $row['title'].'<br />';
  echo $row['body'].'<br />';
  echo '<br />';
}

// requête avec paramètres
// récupération de plusieurs éléments en une seule fois
$sql = "SELECT * FROM post WHERE title LIKE :title";
$stmt = $conn->executeQuery($sql, [
  'title' => 'B%',
]);
$rows = $stmt->fetchAll();

foreach ($rows as $row) {
  echo $row['title'].'<br />';
  echo $row['body'].'<br />';
  echo '<br />';
}

// requête avec paramètre
// récupération d'un seul élément
$sql = "SELECT * FROM post WHERE id = :id";
$row = $conn->fetchAssoc($sql, [
  'id' => 2,
]);

echo $row['title'].'<br />';
echo $row['body'].'<br />';
echo '<br />';
