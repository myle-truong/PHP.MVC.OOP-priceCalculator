<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MVC_OOP Price Caculator</title>
</head>
<body>

<?php

//get data from json file of customers
$customers_json = file_get_contents('http://localhost/MVC/priceCalculator/models/customers.json');
$customers_data = json_decode($customers_json); ?>

  <select name="customers">
    <?php
      foreach ($customers_data as $listName) {
        echo '<option value="\"$value\"'.$listName->id.'">'.$listName->name.'</option>';
      }
    ?>
  </select>
  <br><br>
<?php 
//get data from products's json file
$products_json = file_get_contents('http://localhost/MVC/priceCalculator/models/products.json'); 
$products_data = json_decode($products_json); ?>
      <select name="products">
        <?php
          foreach ($products_data as $listProducts) {
            echo '<option value=\"$value\"'.$listProducts->id.'">'.$listProducts->name.'</option>';
          } 
        ?>
      </select>
      <br><br>
<!-- <?php
//get data from group' json file
$groups_json = file_get_contents('http://localhost/MVC/priceCalculator/models/groups.json');
$groups_data = json_decode($groups_json); ?>
    <select name="products">
    <?php
      foreach ($groups_data as $listGroups) {
        echo '<option value=\"$value\"'.$listGroups->id.'">'.$listGroups->name.'</option>';
      }
    ?>
    </select>
    <br><br> -->
  <form>
      <input type="submit" name="select">
  </form>
  

</body>
</html>