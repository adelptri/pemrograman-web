<?php
$i=1;
$jml=0;
while ($i<=9){
    echo $i." ";
    if ($i%3==0){
        $jml=$i+($i-3);
        echo $jml." ";
    }
    $i++;
}
