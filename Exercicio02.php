<?php
print "Digite o valor dos rendimentos bancários: ";
$rendb = trim(fgets(STDIN));
$tribrendb  = ($rendb * 0.2); 																//Trib 20% sobre rendimentos bancarios.
print "Digite o valor dos rendimentos de salário ou serviços: ";
$rendss = trim(fgets(STDIN));
if ($rendss <= 8000){
	$tribrendss = 0;
}
else if ($rendss >= 8000.01 && $rendss <= 24000){
	$tribrendss = ($rendss*0.15); 																//Trib 15% sobre rendimentos de salario e serviços.
}
else{
	$tribrendss=($rendss*0.2); 																//Trib 20% sobre rendimentos de salario ou serviços.
}
print "Digite o valor anual dos outros rendimentos: ";
$or = trim(fgets(STDIN));
$tribor = ($or * 0.1); 																		//Trib 10% do valor sobre outros rendimentos.
print "Digite o total anual de serviços médicos adquiridos: ";
$servm = trim(fgets(STDIN));
print "Digite o total anual de serviços educacionais adquiridos: ";
$serve = trim(fgets(STDIN));
$ttrib = ($tribrendb + $tribrendss + $tribor);
$abat = (($tribrendb+$tribrendss+$tribor) * 0.3);
$servtotal = ($servm + $serve);
print "\nTotal de rendimentos Bancarios: $rendb
Total de rendimentos de salarios ou serviços: $rendss
Total de outros rendimentos: $or
Serviços medicos pagos: $servm
Serviços educacionais pagos: $serve\n\n";
print "Total de Impostos;
R$	$tribrendb		(Sobre rendimentos bancarios)
R$	$tribrendss		(Sobre salarios ou serviços)
R$	$tribor		(Sobre outros rendimentos)
R$	$ttrib		(Total)\n";
print "\nMaximo a ser abatido: R$ $abat\n";
print "\nTotal de valores possiveis de abater:
R$	$servm		(Serviços medicos)
R$	$serve		(Serviços educacionais)
R$	$servtotal		(Total)\n";
if ($servtotal < $abat){
	print"
	Imposto total:
	R$	$ttrib			(Imposto bruto)
	R$	$servtotal		(Abatimentos)
	R$	".($ttrib - $servtotal)."			(Total)"; 	
}
else{
	print"
Imposto total:
------------------------------------------------------------
R$	$ttrib		(Imposto bruto)
R$	$abat		(Abatimentos)
R$	".($ttrib - $abat)."		(Total)";
}