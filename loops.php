<?php

$product1 = [
  'id' => 42,
  'name' => 'Foo',
  'description' => 'Lorem ipsum',
  'price' => 3.14,
];

$product2 = [
  'id' => 43,
  'name' => 'Bar',
  'description' => 'Lorem ipsum',
  'price' => 3.14,
];

$product3 = [
  'id' => 44,
  'name' => 'Baz',
  'description' => 'Lorem ipsum',
  'price' => 3.14,
];

$products = [$product1, $product2, $product3];

// boucle foreach avec données seules
foreach ($products as $product) {
  echo $product['name'].'<br />';
  echo $product['price'].'<br />';
}

// boucle foreach avec clés et données
foreach ($products as $key => $product) {
  echo $key.'<br />';
  echo $product['name'].'<br />';
  echo $product['price'].'<br />';
}

// boucle for pour tableaux à index numérique
for ($i = 0; $i < count($products); $i++) {
  echo $i.'<br />';
  echo $products[$i]['name'].'<br />';
  echo $products[$i]['price'].'<br />';
}

// boucle while (qui émule une boucle for)
$i = 0;
while ($i < count($products)) {
  echo $i.'<br />';
  echo $products[$i]['name'].'<br />';
  echo $products[$i]['price'].'<br />';
  $i++;
}

// boucle while avec appel de fonction
while ($product = array_shift($products)) {
  echo $product['name'].'<br />';
  echo $product['price'].'<br />';
}
