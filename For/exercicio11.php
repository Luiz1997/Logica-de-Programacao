<?php
/* Fazer um programa que leia um n�mero X e um n�mero N. Mostrar na tela os valores da tabuada de multiplica��o de X para
os valores de 0 a N. Exemplo: Tabuada de 5, de 0 a 7: Mostrar: 0, 5, 10, 15, 20, 25, 30, 35. */
print "Digite o valor de X: ";
$x = trim(fgets(STDIN));
print "Digite o valor de N: ";
$n = trim(fgets(STDIN));

for ($i=0; $i<=$n; $i++) {
	$m = $i * $x;
	print "\n$x x $i = $m" ;
}