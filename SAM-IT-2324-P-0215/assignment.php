<?php
echo"Question - 01";
echo"<br>";
$hour = date("H");

if ($hour >= 5 && $hour < 12) {
    echo "Good Morning!";
} elseif ($hour >= 12 && $hour < 17) {
    echo "Good Afternoon!";
} elseif ($hour >= 17 && $hour < 21) {
    echo "Good Evening!";
} else {
    echo "Good Night!";
}

echo "<hr>";
echo"Question - 02";
echo"<br>";
$num1 = 10;
$num2 = 5;
$operator = '*';

switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            echo $num1 / $num2;
        } else {
            echo "Cannot divide by zero!";
        }
        break;
    case '%':
        echo $num1 % $num2;
        break;
    default:
        echo "Invalid operator";
}

echo"<hr>";
echo"Question - 03";
echo"<br>";
echo "<br>";
$count = 10;
while ($count >= 1) {
    echo $count . "<br>";
    $count--;
}

echo "<hr>";
echo"Question - 04";
echo"<br>";
echo "<br>";
$num = 1;
do {
    if ($num % 2 == 0) {
        echo $num . "<br>";
    }
    $num++;
} while ($num <= 10);


echo"<hr>";
echo"Question - 05";
echo"<br>";
echo "<br>";
for ($i = 1; $i <= 100; $i++) {
    echo "Square of $i is " . ($i * $i) . "<br>";
}

echo"<hr>";
echo"Question - 06";
echo"<br>";
echo "<br>";
$num = 5;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Factorial of $num is $factorial";


echo"<hr>";
echo"Question - 07";
echo"<br>";
echo "<br>";

$num = 13;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$num is a Prime Number";
} else {
    echo "$num is Not a Prime Number";
}


echo"<hr>";
echo"Question - 08";
echo "<br>";
echo"<br>";
echo
"<table border='1' style ='border-collapse:collapse;'>
    <tr>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	</tr>
	
    <tr>
	<td  style='background-color: black' width = '60px' height = '50px'></td>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>

	</tr>
	
	
    <tr>
	<td  width = '60px' height = '50px'></td>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>
	<td  width = '60px' height = '50px'>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>
	<td  width = '60px' height = '50px'>
	<td  style='background-color: black'width = '60px' height = '50px' ></td>
	<td  width = '60px' height = '50px'>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>

	</tr>
    <tr>
	<td  style='background-color: black' width = '60px' height = '50px'></td>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>

	</tr>
    <tr>
	<td  width = '60px' height = '50px'></td>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>
	<td  width = '60px' height = '50px'>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>
	<td  width = '60px' height = '50px'>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>
	<td  width = '60px' height = '50px'>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>

	</tr>
    <tr>
	<td  style='background-color: black' width = '60px' height = '50px'></td>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>

	</tr>
    <tr>
	<td  width = '60px' height = '50px'></td>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>
	<td  width = '60px' height = '50px'>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>
	<td  width = '60px' height = '50px'>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>
	<td  width = '60px' height = '50px'>
	<td  style='background-color: black' width = '60px' height = '50px' ></td>

	</tr>
    <tr>
	<td  style='background-color: black' width = '60px' height = '50px'></td>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>
	<td  style='background-color: black' width = '60px' height = '50px'>
	<td  width = '60px' height = '50px' ></td>

	</tr>


</table>";  








?>