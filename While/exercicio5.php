<?php
print "Digite um numero: ";
$x = trim(fgets(STDIN));

$media = 0;
$soma = 0;
while ($x != 0) {
	$media = $media + 1;
	$soma = $soma + $x;
	print "Digite outro: ";
	$x = trim(fgets(STDIN));	
}

$ar = $soma / $media;
print "Media aritmetica: " . $ar ;

