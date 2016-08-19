<?php
//a.Determinar si un número es negativo.
echo "Taller 2<br><br>";
echo "a.Determinar si un número es negativo.<br><br>";

$Numero= 0;

if($Numero < 0) {
	echo "El número es negativo";
} elseif ($Numero > 0) {
	echo "El numero no es negativo";
} else {
	echo "El numero no es negativo<br><br>";
}


echo "b.Imprimir verdadero o falso deacuerdo al contenido de una variable.<br><br>";

$Variable=True;
if ($Variable) {
	echo "Es verdadero<br><br>";
}else{
	echo "Es falso";
}


echo "c.Determinar si un numero es primo.<br><br>";


	$num1 = 8;
	$primo = 0;
	 
	for ($b = 1; $b < $num1; $b++) {
	    if ($num1 % $b == 0) {
	        $primo++;
	    }
	}
	 
	if ($primo >= 2) {
	    echo "El numero ".$num1." no es primo.<br><br>";
	} else {
	    echo "El numero ".$num1." es primo.<br><br>";
	}

    
        
echo "d.Determinar si un número es mayor que 35.<br><br>";

	$mayor=100;

	if($mayor > 35){
		echo "el numero es mayor>".$mayor."<br><br>";
	} else {
		echo "No es mayor";
	}

echo "e.Determinar si un número es positivo y menor que 100.<br><br>";

	$Pos=1;

	if($Pos >= 0 && $Pos < 100) {
		echo " ".$Pos." es positivo y menor que 100<br><br>";
	}else {
		echo " ".$Pos." es negativo y menor que 100";
	}

echo "f.Determinar si un número pertenece al intervalo [-3,27].<br><br>";

	$Int=-3.27;

	if($Int < -3.26 && $Int > -3.28){
		echo " pertenece<br><br>";
	}	else{
		echo "No pertenece al intervalo";
	}

echo "g.Determinar si un número no pertenece al intervalo [25,50].<br><br>";

	$Num=50;

	if($Num >= 25 && $Num <=50){
		echo " ".$Num."Pertenece al intervalo [25,50]<br><br>";
	}else{
		echo " ".$Num."No pertenece al intervalo [25,50]";
	}

echo "h.Determinar si el módulo de un número es menor que 15.<br><br>";

$Mod=10;
	
	if($Mod % 1 < 15){
		echo "el modulo es menor que 15<br><br>";
	}else{
		echo "el modulo es mayor que 15";
	}

echo "i.Determinar si un entero es impar (lo será cuando el resto de su división (operador aritmético ‘%’) por 2 sea distinto de cero).<br><br>";

	$num2=3;

	if ($num2 % 2 ==0) {
		echo " ".$num2."No es un numero impar.<br><br>";
	}else {
		echo " ".$num2."el numero es impar.<br><br>";
	}

echo "j.Eleve al cuadrado un número si es par y al cubo si es impar.<br><br>";

	$var = 3;
	$elev;

	if ($var % 2 == 0) {
		$elev = $elev **2;
		echo " ".$var." elevado al cuadrado es: ".$elev."<br><br>";
	}else {
		$elev = $var ** 3;
		echo " ".$var." elevado al cubo es: ".$elev."<br><br>";
	}

echo "k.Calcule el máximo de 2 números dados.<br><br>";

	$num3= 100;
	$num4 = 200;

	if($num3 < $num4) {
		echo "El maximo entre ".$num3." y ".$num4." es ".$num4.".<br><br>";
	}else {
		echo "El maximo entre ".$num3." y ".$num4." es ".$num3.".<br><br>";
	}

echo "l.Calcule el máximo de tres números.<br><br>";

	$num5 = 300;
	$num6 = 400;
	$num7 = 500;

	if($num5 < $num6 && $num6 > $num7) {
		echo "El maximo entre ".$num5.", ".$num6." y ".$num7." es ".$num6.".<br><br>";
	}else if($num5 > $num6 && $num5 > $num7) {
		echo "El maximo entre ".$num5.", ".$num6." y ".$num7." es ".$num5.".<br><br>";
	}else if($num5 < $num6 && $num6 < $num7) {
		echo "El maximo entre ".$num5.", ".$num6." y ".$num7." es ".$num7.".<br><br>";
	}

echo "m.Ordenar 2 números de menor a mayor.<br><br>";

	$num8 = 10;
	$num9 = 20;

	if($num8 < $num9) {
		echo "Orden de menor a mayor ".$num8.", ".$num9.".<br><br>";
	}else {
		echo "Orden de mayor a menor".$num9.", ".$num8.".<br><br>";
	}

echo "n.Ordenar 3 numeros de mayor a menor.<br><br>";

	$num10 = 600;
	$num11 = 700;
	$num12 = 800;

	if($num10 > $num11 && $num11 > $num12) {
		echo "Orden de mayor a menor ".$num10.", ".$num11.", ".$num12.".<br><br>";
	}else if($num10 < $num11 && $num11 < $num12) {
		echo "Orden de mayor a menor ".$num12.", ".$num11.", ".$num10.".<br><br>";
	}else if($num10 < $num11 && $num12 < $num10) {
		echo "Orden de mayor a menor ".$num11.", ".$num10.", ".$num12.".<br><br>";
	}else if($num10 < $num11 && $num12 > $num10) {
		echo "Orden de mayor a menor ".$num11.", ".$num12.", ".$num10.".<br><br>";
	}else if($num10 > $num12 && $num18 > $num11) {
		echo "Orden de mayor a menor ".$num10.", ".$num12.", ".$num11.".<br><br>";
	}else if($num10 < $num12 && $num10 > $num11) {
		echo "Orden de mayor a menor ".$num12.", ".$num10.", ".$num11.".<br><br>";
	}

echo "o.Determinar la longitud de una cadena y si es mayor a 5 caracteres indicar nombre largo, de lo contrario nombre corto.<br><br>";

	$Long = "HolaMundo";
	
	if(strlen($Long) > 5) {
		echo "La longitud de la cadena es de ".strlen($Long)." caracteres, el texto es largo.<br><br>";
	}else {
		echo "La longitud de la cadena es de ".strlen($Long)." caracteres, el texto es corto.<br><br>";
	}

echo "p.Determinar si una variable existe.<br><br>";

	if(isset($var1)) {
		echo "La variable existe.<br><br>";
	}else {
		echo "La variable no existe.<br><br>";
	}

echo "q.Determinar si una variable está vacía o tiene contenido.<br><br>";

	$var2;

	if(empty($var2)) {
		echo "La variable esta vacia.<br><br>";
	}else {
		echo "La variable contiene informacion.<br><br>";
	}

?>

