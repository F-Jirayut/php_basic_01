<?php
    // Operators
    // +	Addition	$x + $y	Sum of $x and $y	
    // -	Subtraction	$x - $y	Difference of $x and $y	
    // *	Multiplication	$x * $y	Product of $x and $y	
    // /	Division	$x / $y	Quotient of $x and $y	
    // %	Modulus	$x % $y	Remainder of $x divided by $y	
    // **	Exponentiation	$x ** $y	Result of raising $x to the $y'th power

    // +
    $x = 1;
    $y = 2;
    $sum = $x + $y;
    echo "Addition (+)";
    echo "<br>";
    echo $x ." + ".$y. " = ".$sum;
    echo "<br>";
    echo "* String + int = String , ต้องใช้ จุด (.) ในการบวกหรือต่อ String";
    $text = $x ." + ".$y. " = ".$sum;
    echo "<br> type = ";
    echo gettype($text);

    // -
    $x = 1;
    $y = 2;
    $sum = $x - $y;

    // *
    $x = 2 * 3;
    $sum = $x;

    // /
    $x = 2 / 2;
    $sum = $x;

    // %
    $x = 2 % 2;
    $sum = $x;

    // **
    $x = 2 ** 2;
    $sum = $x;

    echo "<br>";
    echo "<a href=\"https://www.w3schools.com/php/php_operators.asp\" target=\"_blank\">ดูเพิ่มเติม</a>";

?>