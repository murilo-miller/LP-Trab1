<?php
print "Digite o valor dos rendimentos bancários: ";											//saida de dados
$rendb = trim(fgets(STDIN));																//entrada de dados
$tribrendb  = ($rendb * 0.2); 																//atribuição Trib 20% sobre rendimentos bancarios.
print "Digite o valor dos rendimentos de salário ou serviços: ";							//saida de dados
$rendss = trim(fgets(STDIN));																//entrada de dados
if ($rendss <= 8000){
	$tribrendss = 0;
}
else if ($rendss >= 8000.01 && $rendss <= 24000){
	$tribrendss = ($rendss*0.15); 															//Trib 15% sobre rendimentos de salario e serviços.
}
else{
	$tribrendss=($rendss*0.2); 																//Trib 20% sobre rendimentos de salario ou serviços.
}
print "Digite o valor anual dos outros rendimentos: ";										//saida de dados
$or = trim(fgets(STDIN));																	//entrada de dados
$tribor = ($or * 0.1); 																		//Trib 10% do valor sobre outros rendimentos.
print "Digite o total anual de serviços médicos adquiridos: ";								//saida de dados
$servm = trim(fgets(STDIN));																//entrada de dados
print "Digite o total anual de serviços educacionais adquiridos: ";							//saida de dados
$serve = trim(fgets(STDIN));																//entrada de dados
$ttrib = ($tribrendb + $tribrendss + $tribor);												//atribuiçao
$abat = (($tribrendb+$tribrendss+$tribor) * 0.3);											//atribuiçao
$servtotal = ($servm + $serve);																//atribuiçao
print "\nTotal de rendimentos Bancarios: $rendb";												
print "\nTotal de rendimentos de salarios ou serviços: $rendss";
print "\nTotal de outros rendimentos: $or";
print "\nServiços medicos pagos: $servm";
print "\nServiços educacionais pagos: $serve\n";
print "\nTotal de Impostos";
print "\nR$	$tribrendb		(Sobre rendimentos bancarios)";
print "\nR$	$tribrendss		(Sobre salarios ou serviços)";
print "\nR$	$tribor		(Sobre outros rendimentos)";
print "\nR$	$ttrib		(Total)\n";
print "\nMaximo a ser abatido: R$ $abat";
print "\nTotal de valores possiveis de abater:";
print "\nR$	$servm		(Serviços medicos)";
print "\nR$	$serve		(Serviços educacionais)";
print "\nR$	$servtotal		(Total)\n";
if ($servtotal < $abat){
	print "\nImposto total: ";
	print "\nR$	$ttrib			(Imposto bruto)";
	print "\nR$	$servtotal		(Abatimentos)";
	print "\nR$	".($ttrib - $servtotal)."			(Total)";
}
else{
	print "\nImposto total:";
	print "\n------------------------------------------------------------";
	print "\nR$	$ttrib		(Imposto bruto)";
	print "\nR$	$abat		(Abatimentos)";
	print "\nR$	".($ttrib - $abat)."		(Total)";
}