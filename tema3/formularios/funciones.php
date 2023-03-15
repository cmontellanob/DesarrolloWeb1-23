<?php 
function menor($a, $b, $c) {
    if ($a<$b && $a<$c) {
        return $a;
    } else if ($b<$a && $b<$c) {
        return $b;
    } else {
        return $c;
    }
} 
function fibonnaci($n)
{ if ($n==0)
    return 0;
  else if ($n==1)
    return 1;
  else
    return fibonnaci($n-1)+fibonnaci($n-2);


}


?>
