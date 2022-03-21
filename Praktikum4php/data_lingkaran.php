<?php
require_once "class_lingkaran.php";
echo "NILAI PHI " .Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);

echo "<br/>Luas Lngkaran I ".$lingkar1->getLuas();
echo "<br/>Lingkaran II ".$lingkar2->getLuas();

echo "Keliling Lingkaran I ".$lingkar1->getkeliling();
echo "<br>Keliling lingkaran II ".$lingkar2->getkeliling();

?>