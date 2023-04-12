<?php
$weather = "hujan";
echo "Cuaca"."Bandung"."Pada";
echo "<br>";
exit ();
if ($weather == "hujan"){
    echo "Saat ini sedang hujan";
} elseif ($weather == "panas"){
    echo "Saat ini sedang panas";
}else {
    echo "saya tidak tahu cuaca hari ini";
}
?>