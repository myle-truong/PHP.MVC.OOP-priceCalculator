<?php
// define for caculating: 
Class discount{
  public $variable=0;
  public $fixed=0;
 }







 session_start(); 





 $_SESSION['output']=$customer->name.' total your bill is '.round($price,2).' EUR for '.$product->name;
 require ('..\priceCalculator\views\view.php'); 
