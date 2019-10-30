<?php

$str = "Is your name O'Reilly ?";
$str2 = addslashes($str);
$str3 = stripleshes($str2);

echo "<b>String asli</b> : $str";
echo "<b>addslashes()</b> : $str2";
echo "<b>stripleshes()</b> : $str3";

?>
