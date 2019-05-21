<?php
$products = [];
$product['id'] = '1';
$product['quantity'] = '1';
$product['name'] = 'Compass';

$products[] = $product;

$product['id'] = '2';
$product['quantity'] = '10';
$product['name'] = 'Renegade';
$products[] = $product;

echo json_encode($products);