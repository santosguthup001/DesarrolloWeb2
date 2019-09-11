<?php
echo'<form action="segundo.php"method="post">';
echo'Ingrese base:<input type="text" name="b">';
echo "<br>";
echo'Ingrese altura:<input type="text" name="h">';
echo"<br>";
echo'<input type="submit" name="bt1" value="calcular">';
echo"</form>";

if(isset($_POST['bt1'])){
	$area=($_POST['b']*$_POST['h'])/2;
	echo"<br>El area del triangulo es: ".$area;
}
?>