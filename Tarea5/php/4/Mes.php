<?php
$m=$_GET['txtn'];

if($m > 0 and $m<=12){
	if($m == 1)
	{
		$m=1;
		echo"Enero";
	}
	if($m == 2)
	{
		$m=2;
		echo"Febrero";
	}
	if($m == 3)
	{
		$m=3;
		echo"Marzo";
	}
	if($m == 4)
	{
		$m=4;
		echo"Abril";
	}
	if($m == 5)
	{
		$m=5;
		echo"Mayo";
	}
	if($m == 6)
	{
		$m=6;
		echo"Junio";
	}
	if($m == 7)
	{
		$m=7;
		echo"Julio";
	}
	if($m == 8)
	{
		$m=8;
		echo"Agosto";
	}
	if($m == 9)
	{
		$m=9;
		echo"Septiembre";
	}
	if($m == 10)
	{
		$m=10;
		echo"Octubre";
	}
	if($m == 11)
	{
		$m=11;
		echo"Noviembre";
	}
	if($m == 12)
	{
		$m=12;
		echo"Diciembre";
	}
}