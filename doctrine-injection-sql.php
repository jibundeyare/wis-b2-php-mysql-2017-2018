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

// requête avec paramètres
$id = empty($_GET['id']) ? '0':$_GET['id'];
$sql = "SELECT * FROM post WHERE id != 1 AND id = ".$id;
$stmt = $conn->executeQuery($sql);
$rows = $stmt->fetchAll();

foreach ($rows as $row) {
  echo $row['title'].'<br />';
  echo $row['body'].'<br />';
  echo '<br />';
}

echo 'OK<br />';

// utilisation normale
// avec id = 1, on n'obtient pas de résultat
// http://localhost/cours-php-base/doctrine-injection-sql.php?id=1

// utilisation normale
// avec id = 2, on obtient un résultat
// http://localhost/cours-php-base/doctrine-injection-sql.php?id=2

// hack
// injection de code sql
// http://localhost/cours-php-base/doctrine-injection-sql.php?id='' OR id = 1;--
