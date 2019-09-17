<?php
class Operaciones{

private $n;
private $cadena;
private $a; 
private $b; 
private $c;
function __constructor($n, $cadena, $a, $b, $c){

	$this->n=$n;
	$this->cadena=$cadena;
	$this->a=$a
	$this->b=$b;
	$this->c=$c;

function Calcularfibonacci(){

for($i=0;$i<=$n;$i++)
{

	$suma=$a+$b;
	$a=$b;
	$b=$suma;
	echo $suma." ";
	}
}
function CalcularMenor(){

if($a<$b and $a<$c){
	echo $a;
}
	else{

	if($b<$a and $b<$c){
		echo $b;
		}
	}
	else{
		if($c<$a and $c<$b){
			echo $c; }
			}
	}
function Piramide(){
	$caden=strlen("$this->cadena");
	$k=($caden/2)-1;
	for($j=1; $j<=$caden+1; $j++)
	{
		echo '<center>'.substr("$this->cadena",$k,$j),"<br><br>".'</center>';
		if($k==-$k)
		{
			$k=0;
		}
		else{
			$k=$k-1;
		}
		$j=$j+1;
	}
}
}