<?php
//data for customer
$customers_json = file_get_contents('http://localhost/MVC/priceCalculator/models/customers.json');
$customers_data = json_decode($customers_json);

//data for product
$products_json = file_get_contents('http://localhost/MVC/priceCalculator/models/products.json'); 
$products_data = json_decode($products_json);

//data for group
$groups_json = file_get_contents('http://localhost/MVC/priceCalculator/models/groups.json');
$groups_data = json_decode($group_json);
