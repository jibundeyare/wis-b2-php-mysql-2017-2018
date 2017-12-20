<?php

// initialiation d'un tableau avec des données
$myArray = [123, 42, 0, 2];
// $myArray = array(123, 42, 0, 2); // ancienne notation

// initialiation d'un tableau vide
$myArray1 = [];
// $myArray1 = array(); // ancienne notation

// push
$myArray1[] = 'foo';
$myArray1[] = 'bar';
$myArray1[] = 'baz';
array_push($myArray1, 'lorem'); // pareil que `$myArray1[] = 'lorem';`
array_push($myArray1, 'ipsum');

// pop
$popped = array_pop($myArray1);

// shift
$shifted = array_shift($myArray1);

// unshift
array_unshift($myArray1, 'sic');

// splice (supprimer au milieu)
// supprimons 'baz'
$offset = 2;
$length = 1;
$removed = array_splice($myArray1, $offset, $length);

// splice (insérer au milieu)
// insérons 'baz' entre 'sic' et 'bar'
$offset = 1;
$length = 0;

array_splice($myArray1, $offset, $length, 'baz');

// splice remplacer (au milieu)
// remplaçons 'bar' par 'foo'
$offset = 2;
$length = 1;
$replaced = array_splice($myArray1, $offset, $length, 'foo');

echo '<pre>';
var_dump($myArray1);
echo '</pre>';

// initialisation d'un tableau avec des clés alphanumériques
$product = [
  'id' => 42,
  'name' => 'Foo',
  'description' => 'Lorem ipsum',
  'price' => 3.14,
];

// ajout de clés et de données
$product['highlight'] = true;
$product['stock'] = 123;

// modifier des données
$product['price'] = 99.99;

// afficher des données
echo 'produit : '.$product['name'].'<br />';
echo 'prix : '.$product['price'].'<br />';
