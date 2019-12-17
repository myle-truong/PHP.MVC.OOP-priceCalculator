<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MVC_OOP Price Caculator</title>
</head>
<body>
<form method="POST" action="..\priceCalculator\models\model.php">

<?php
$customers_json = file_get_contents('http://localhost/MVC/priceCalculator/models/customers.json');
$customers_data = json_decode($customers_json); ?>
    <select name="customers">
      <?php
      foreach ($customers_data as $listName) {?>
          <option value="<?php echo $listName-> name ?>"><?php echo $listName-> name ?></option>
      <?php } ?>
    </select>

<?php 

$products_json = file_get_contents('http://localhost/MVC/priceCalculator/models/products.json'); 
$products_data = json_decode($products_json); 
?>
      <select name="products">
        <?php
          foreach ($products_data as $listProducts) {
            echo '<option value=\"$value\"'.$listProducts->id.'">'.$listProducts->name.'</option>';
          } 
        ?>
      </select>
      <input type="submit" name="submit" value="submit">
  </form>
  <div><?php echo $_SESSION['output']; ?></div>

</body>
</html>