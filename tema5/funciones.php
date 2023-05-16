<?php 
function fibonaci($n)
{
    if ($n==0 or $n==1)
    {
        return 1;
    }
    else
    {
        return fibonaci($n-1)+fibonaci($n-2);
    }
       
}