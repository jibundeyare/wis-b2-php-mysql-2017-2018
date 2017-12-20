<?php

use Symfony\Component\Yaml\Yaml;

require __DIR__.'/vendor/autoload.php';

$db = Yaml::parseFile('db.yml');

// var_dump($db);

echo 'host:'.$db['host'].'<br />';
echo 'port : '.$db['port'].'<br />';
echo 'login : '.$db['login'].'<br />';
echo 'password : '.$db['password'].'<br />';
echo 'name : '.$db['name'].'<br />';
