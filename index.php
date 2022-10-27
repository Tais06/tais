<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author=" Taís Oliveira">
    <meta name="description" content="Calculadora simples">
    <meta name="keywords" content="calculadora,simples, php">
    <title>Calculadora simples</title>
</head>
<body>
 
   <?php 
 $num1 = $_GET['num1'];
 $num2 = $_GET['num2'];
 echo "Soma         : ","$num1+$num2 = ",$num1+$num2, "<br />";
 echo "Subtração        : ","$num1-$num2 = ",$num1-$num2, "<br />";
 echo "Multiplicação    : ","$num1*$num2 = ",$num1*$num2, "<br />";
 echo "Divisão         : ","$num1/$num2 = ",$num1/$num2, "<br />";
 echo "Resto da divisão : ","$num1%$num2 = ",$num1%$num2, "<br />";
   ?>
 </body>
</html>
