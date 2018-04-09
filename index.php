<?php
  require "libs/Smarty.class.php";
  $smarty = new Smarty;
  $smarty -> assign(nazev,24);
  $smarty -> display("basicTemplate.tpl");
?>
