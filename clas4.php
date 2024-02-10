<?php
// Paso 1: Declarar 5 variables numéricas
$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;
$num5 = 5;

// Paso 2: Sumar todas las variables numéricas y almacenar el resultado en $total
$total = $num1 + $num2 + $num3 + $num4 + $num5;

// Paso 3: Realizar una secuencia de días de la semana
for ($i = 1; $i <= 5; $i++) {
  switch ($i) {
    case 1:
      echo "Lunes";
      break;
    case 2:
      echo "Martes";
      break;
    case 3:
      echo "Miércoles";
      break;
    case 4:
      echo "Jueves";
      break;
    case 5:
      echo "Viernes";
      break;
  }
  
  if ($i < 5) {
    echo ",";
  }
}

echo "<br>";

// Paso 4: Realizar un bucle donde me salude 5 veces
for ($i = 1; $i <= 5; $i++) {
  echo "Hola<br>";
}

// Paso 5: Salida por pantalla de los días de la semana
$dias_semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes");
echo implode(",", $dias_semana);
echo "<br>";

// Paso 6: Convertir un string en un array de días de la semana
$string_dias_semana = "Lunes,Martes,Miércoles,Jueves,Viernes";
$array_dias_semana = explode(",", $string_dias_semana);
print_r($array_dias_semana);
echo "<br>";

// Paso 7: Ordenar los números de manera descendente
$numeros = array($num1, $num2, $num3, $num4, $num5);
rsort($numeros);
print_r($numeros);
?>
