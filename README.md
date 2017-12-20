# Cours php base

## Install

Copiez le fichier `db.yml.dist` sans l'extension `.dist` et complétez-le avec les informations manquantes.

## PHP

Pour vérifier que php est bin installé :

    php -v

Pour valider la syntaxe du code php :

    php -l [nom du fichier]

Par exemple

    php -l hello.php

## Composer

Installer la version 3.4 du paquet symfony/yaml :

    composer require symfony/yaml:^3.4.0

Installer la version 2.5 du paquet doctrine/dbal :

    composer require doctrine/dbal ^2.5

Installer la version 1.35 du paquet twig/twig :

    composer require twig/twig ^1.35

## Doc

- [PHP: Array Functions - Manual](http://php.net/manual/en/ref.array.php)
- [The Yaml Component (Symfony 3.4 Docs)](https://symfony.com/doc/3.4/components/yaml.html)
- [Welcome to Doctrine DBAL’s documentation! — Doctrine DBAL 2 documentation](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/)
- [Home - Twig - The flexible, fast, and secure PHP template engine](https://twig.symfony.com/)
- [PHP: date - Manual](http://php.net/manual/fr/function.date.php)
