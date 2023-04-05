<?php
    $nilai=40;
    if($nilai>=70){
        echo "anda lulus";
    }else if($nilai>=50){
        echo "anda lulus bersyarat";
    }else{
        echo"anda tidak lulus<br>";
    }
    $cuaca= "Hujan";
    switch($cuaca){
        case "panas":
            echo "jemur baju";
            break;
        case "hujan":
            echo "diam di rumah";
            break;
        case "mendung":
            echo "sebaiknya tidak keluar rumah";
            break;
        case "berawan":
            echo "ayo main bola";
            break;
        default:
            echo "saya tidak tahu cuaya hari ini";
            break;
    }
    
?>