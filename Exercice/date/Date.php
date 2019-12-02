<?php
echo "1) ". date("l j F o ");
echo"<br>";
echo "2) ". date("M ds o ");
echo"<br>";
echo "3) ". date("j/m/y h:i A");
echo"<br>";
echo "4) ". date("j M o, H:i:s");
echo"<br>";
echo "5) ". date("r");
echo"<br>";
echo "6) ". date("l j F o", mktime(0,0,0,6,6,666));
?>
