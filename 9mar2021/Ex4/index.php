<?php
$total= $sqtotal =0;
$number=0;
while ($number < 50 ){
    $total += $number;
    $sqtotal +=($number*$number);
    $number++;
}
echo'Tong'.$total.'<br>';
echo'binh phuong'.$sqtotal.'<br>';