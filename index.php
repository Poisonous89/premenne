<?php
$o = 10;
$s = " ahoj <br>";
$e = 5;
//echo ("obsah obdlznika je ".$o*$e." m<sup>2</sup>.");
#ahoj
//ahoj
/*
cau
*/
/**
 * 
 */
$a = 2;
$b = 10;
$c = 100;
if  ($a>$b){
    echo($a);
}
else if ($b>$c){
    echo($b);
}
else{
    echo($c);
}


$listZaciatok = [12,4,3,2,10,6,5,4,3,9]; $velkostListu = count($listZaciatok);

$listVysledok = [];

for ($j=0; $j < $velkostListu; $j++) {

$najmensie = $listZaciatok[0];

for ($i=0; $i < count($listZaciatok); $i++) {

if ($najmensie > $listZaciatok[$i]) {

$najmensie = $listZaciatok[$i];

Sporadie = $i;

}

} echo("Najmensie v cykle: ". $najmensie. "< br >"); $listVysledok[$j] = $najmensie; array_splice($listZaciatok, $poradie, 1);

for ($i=0; $i < count($listVysledok); $i++) { echo($listVysledok[$i].", ");

}



?>