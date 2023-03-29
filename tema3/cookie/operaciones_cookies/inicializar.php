<?php
  $a =$_GET['a'];
  $b =$_GET['b'];
  include('operaciones.php');
  $o = new operaciones($a,$b);
  setcookie('o',$o,time()+3600);
?>