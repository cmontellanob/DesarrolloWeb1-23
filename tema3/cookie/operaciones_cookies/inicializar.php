<?php
  $a =$_GET['a'];
  $b =$_GET['b'];
  setcookie('a',$a,time()+3600);
  setcookie('b',$b,time()+3600);
//   $o = new operaciones($a,$b);
//   setcookie('o',$o,time()+3600);
?>
<meta http-equiv="refresh" content="4;url=menu.html">