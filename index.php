<?php
  require "libs/Smarty.class.php";
  $smarty = new Smarty;
  $smarty -> assign(nazev,24); // primitivní proměnná

  $pole = array(12,23,34,45,56,67,78,89); // pole
  $smarty -> assign(pole,$pole);

  $smarty -> assign(muz,true); // boolean

  $smarty -> assign(img, "https://s3.pixers.pics/pixers/700/FO/91/61/81/79/700_FO91618179_68a0e60d6bf5af5f72d2749970396c8d.jpg"); // img

  $smarty -> assign(backgroundColor, "#ff00ff"); // backgroundColor

  $smarty -> display("basicTemplate.tpl");
?>
