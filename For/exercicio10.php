<?php
/* Fazer um programa que leia um n�mero inteiro X. Da�, mostrar a tabuada de multiplica��o deste n�mero para os valores de 1 a
10. */
print "Valor para multiplica��o: ";
$x = trim(fgets(STDIN));

for ($i=1; $i<=10; $i++) {
	$m = $i * $x;
	print "\n$x x $i = $m" ;
}