<?php
/* Fazer um programa que leia um n�mero positivo N. Da�, imprimir na tela o caractere "*" N vezes. */
print "Digite o valor de N: ";
$N = trim(fgets(STDIN));

for ($i=1; $i<=$N; $i++) {
	print "*";
}