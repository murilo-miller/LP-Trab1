<?php
print "Digite o valor dos rendimentos banc�rios: ";
$rendb = trim(fgets(STDIN));
$tribrendb  = ($rendb * 0.2); 																//Trib 20% sobre rendimentos bancarios.
print "Digite o valor dos rendimentos de sal�rio ou servi�os: ";
$rendss = trim(fgets(STDIN));
if ($rendss <= 8000){
	$tribrendss = 0;
}
else if ($rendss >= 8000.01 && $rendss <= 24000){
	$tribrendss = ($rendss*0.15); 																//Trib 15% sobre rendimentos de salario e servi�os.
}
else{
	$tribrendss=($rendss*0.2); 																//Trib 20% sobre rendimentos de salario ou servi�os.
}
print "Digite o valor anual dos outros rendimentos: ";
$or = trim(fgets(STDIN));
$tribor = ($or * 0.1); 																		//Trib 10% do valor sobre outros rendimentos.
print "Digite o total anual de servi�os m�dicos adquiridos: ";
$servm = trim(fgets(STDIN));
print "Digite o total anual de servi�os educacionais adquiridos: ";
$serve = trim(fgets(STDIN));
$ttrib = ($tribrendb + $tribrendss + $tribor);
$abat = (($tribrendb+$tribrendss+$tribor) * 0.3);
$servtotal = ($servm + $serve);
print "\nTotal de rendimentos Bancarios: $rendb
Total de rendimentos de salarios ou servi�os: $rendss
Total de outros rendimentos: $or
Servi�os medicos pagos: $servm
Servi�os educacionais pagos: $serve\n\n";
print "Total de Impostos;
R$	$tribrendb		(Sobre rendimentos bancarios)
R$	$tribrendss		(Sobre salarios ou servi�os)
R$	$tribor		(Sobre outros rendimentos)
R$	$ttrib		(Total)\n";
print "\nMaximo a ser abatido: R$ $abat\n";
print "\nTotal de valores possiveis de abater:
R$	$servm		(Servi�os medicos)
R$	$serve		(Servi�os educacionais)
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