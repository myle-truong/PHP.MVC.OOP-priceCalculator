<?php

function seclecItems ($select, $items, $store) {
    foreach ($items as $item) {
        if ($item->$store==$select){
            return $item;
        }
    }
}

function getDiscount($group, $groups,$discount){

    if ((isset($group->variable_discount))&&($group->variable_discount>$discount->variable)){
        //echo "variable discount updated";
        $discount->variable=$group->variable_discount;
    }
    if (isset($group->fixed_discount)){
        //echo "fixed discount added";
        $discount->fixed+=$group->fixed_discount;
    }
    if (isset($group->group_id)){
       // var_dump($discount);
        $group=seclecItems($group->group_id, $groups, "id");
        //echo "entering next group with the id ".$group->id;
        $discount=getDiscount($group, $groups, $discount);
    }
    return $discount;
}
session_start();
//---------------------------------get posted customer and product
require ('..\priceCalculator\controllers\controller.php');
require ('..\priceCalculator\models\customers.json');
$customer=seclecItems($customer,$customers,"name");

require ('..\priceCalculator\models\products.json');
$product=seclecItems($product,$products,"name");

require ('..\priceCalculator\models\groups.json');
$price=$product ->price;
$discount=new Discount();
$group=seclecItems($customer->group_id,$groups,"id");
$discount=getDiscount($group,$groups,$discount);
$price-=$discount->fixed;
$price-=($price*$discount->variable/100);
if ($price<0){
    $price=0;
}

$_SESSION['output']=$customer->name.' total your bill is '.round($price,2).' EUR for '.$product->name;
require('..\priceCalculator\views\view.php'); 
