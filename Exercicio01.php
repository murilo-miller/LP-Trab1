<?php
print "Digite a inicial do sexo do cliente: "; 				//saida de dados
$sex = trim(fgets(STDIN));									//entrada de dados
print "Digite a quantidade de cervejas consumidas: ";		//saida de dados
$qtcerv = trim(fgets(STDIN));								//entrada de dados
print "Digite a quantidade de refrigerantes consumidos: ";	//saida de dados
$qtref = trim(fgets(STDIN));								//entrada de dados
print "Digite a quantidade de espetinhos consumidos: ";		//saida de dados
$qtesp = trim(fgets(STDIN));								//entrada de dados
$cantores = 3.00;											//atribui��o
$tcerv = $qtcerv * 2.50;									//atribui��o
$trefri = $qtref * 2.00;									//atribui��o
$tesp = $qtesp * 4.00;										//atribui��o
$cons = $tcerv + $trefri + $tesp;							//atribui��o

print "---------------------------------------------------";

print "\nTotalizadores:";										//saida de dados

print "\n---------------------------------------------------";

if ($sex=="f" || $sex=="F") {				
	print "\nR$ 8,00  (Entrada femenina)";					//se for mulher cobra 8 e armazena valor na variavel ent
	$ent = 8.00;
}
else {				
	print "\nR$ 10,00 (Entrada masculina)";					//se for mulher cobra 8 e armazena valor na variavel ent
	$ent = 10.00;
}
if ($cons > 15.00) {
	print "\nR$ 0,00  (Couvert art�stico)";							//se consumir mais de 15 nao paga couver e armazena 0 na  variavel couv
	$couv = 0.00;
}
else {
	print "\nR$  ".$cantores." (Couvert art�stico)";						//se consumir 15 ou menos imprimi variavel cantores e adiciona o valor na variavel couv
	$couv = $cantores;
}
$subtotal = $ent + $cons + $couv;							//atribui��o
$totalcpec = ($subtotal/100)*10 + $subtotal;				//atribui��os
//formato decimal
$subtotal = number_format($subtotal, 2, ',', ' ');
$totalcpec = number_format($totalcpec, 2, ',', ' ');
print "\nR$ ".$cons ."  (Consuma��o)";						//saida de dados
print "\nR$ ".$subtotal." (subtotal sem 10%)";				//saida de dados
print "\n---------------------------------------------------";//saida de dados
print "\nR$ ".$totalcpec." (total)";							//saida de dados
