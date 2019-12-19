<?php 
session_start(); 
function getDiscount($group, $groups,$discount){
 if (isset($group-)) {

 }
 if ((isset($group->variable_discount))&&($group->variable_discount>$discount->variable)){
  //echo "variable discount updated";
  $discount->variable=$group->variable_discount;
}
}
