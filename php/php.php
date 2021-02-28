<?php 


// Variables

$num = 10;
$pi  = 3.14;
$str = 'This is String';
$b   = true;
$arr = [1,2,3,4];
$n   = null;
$hex = 0xC4A;
$oct = 0744;

$fe = 8.5e4;
$fe2 = 1.5E+10;


// Constants

define("Name", "PHP SheatCheets"); 
const PI = 3.141516;

// Types 

/* Avalable Types in php
	String
	Integer
	Float (floating point numbers - also called double)
	Boolean
	Array
	Object
	NULL
	Resource
*/


$var = (string) 10; // Type Casting

/* Type Check
settype($var, 'type') - Set the type of a variable
gettype() - Get the type of a variable
get_class() - Returns the name of the class of an object
is_array() - Finds whether a variable is an array
is_bool() - Finds out whether a variable is a boolean
is_callable() - Verify that the contents of a variable can be called as a function
is_float() - Finds whether the type of a variable is float
is_int() - Find whether the type of a variable is integer
is_null() - Finds whether a variable is NULL
is_numeric() - Finds whether a variable is a number or a numeric string
is_object() - Finds whether a variable is an object
is_resource() - Finds whether a variable is a resource
is_scalar() - Finds whether a variable is a scalar
is_string() - Find whether the type of a variable is string
function_exists() - Return TRUE if the given function has been defined
method_exists() - Checks if the class method exists
*/

print("Hello");

print "Hello";

echo "Hello", " World";

$var = '10';
echo ' $var = '           . $var;
echo ' and its type is '  . gettype($var) . '.<br>';
echo ' isset($num) '      . isset($var) . '.<br>';
echo ' is_int($num) '     . is_int($var) . '.<br>';
echo ' is_float($num) '   . is_float($var) . '.<br>';
echo ' is_numeric($num) ' . is_numeric($var) . '.<br>';
echo ' is_string($num) '  . is_string($var) . '.<br>';
echo ' is_array($num) '   . is_array($var) . '.<br>';
echo ' is_bool($num) '    . is_bool($var) . '.<br>';
echo ' is_object($num) '  . is_object($var) . '.<br>';
echo ' is_null($num) '    . is_null($var) . '.<br>';
echo ' empty($num) '      . empty($var) . '.<br>';


// Operators


/* Arithmetic Operators 

Example		Name			Result
+$a			Identity		Conversion of $a to int or float as appropriate.
-$a			Negation		Opposite of $a.
$a + $b		Addition		Sum of $a and $b.
$a - $b		Difference of $a and $b.
$a * $b		Multiplication	Product of $a and $b.
$a / $b		Division	Quotient of $a and $b.
$a % $b		Modulo			Remainder of $a divided by $b.
$a ** $b	Exponentiation	Result of raising $a to the $b'th power.

*/

echo (5 % 3)."\n";           // prints 2
echo (5 % -3)."\n";          // prints 2
echo (-5 % 3)."\n";          // prints -2
echo (-5 % -3)."\n";         // prints -2


/* Assignment Operators

Example		Same as...		Description
x = y		x = y			The left operand gets set to the value of the expression on the right	
x += y		x = x + y		Addition	
x -= y		x = x - y		Subtraction	
x *= y		x = x * y		Multiplication	
x /= y		x = x / y		Division	
x %= y		x = x % y		Modulus

*/

$a = 3;
$a += 5; // sets $a to 8, as if we had said: $a = $a + 5;
$b = "Hello ";
$b .= "There!"; // sets $b to "Hello There!", just like $b = $b . "There!";


/* Comparison Operators

Operator						Name		Example	Result	
==	Equal						$x == $y	Returns true if $x is equal to $y	
===	Identical					$x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	Not equal					$x != $y	Returns true if $x is not equal to $y	
<>	Not equal					$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical				$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	Greater than				$x > $y		Returns true if $x is greater than $y	
<	Less than					$x < $y		Returns true if $x is less than $y	
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
<=	Less than or equal to		$x <= $y	Returns true if $x is less than or equal to $y	
<=>	Spaceship					$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

*/

/* Increment / Decrement Operators

Operator	Name				Description	
++$x		Pre-increment		Increments $x by one, then returns $x	
$x++		Post-increment		Returns $x, then increments $x by one	
--$x		Pre-decrement		Decrements $x by one, then returns $x	
$x--		Post-decrement		Returns $x, then decrements $x by one

*/

/* Logical Operators

Operator	Name	Example		Result
and			And		$x and $y	True if both $x and $y are true	
or			Or		$x or $y	True if either $x or $y is true	
xor			Xor		$x xor $y	True if either $x or $y is true, but not both	
&&			And		$x && $y	True if both $x and $y are true	
||			Or		$x || $y	True if either $x or $y is true	
!			Not		!$x			True if $x is not true

*/

/* String Operators

Operator	Name						Example			Result
.			Concatenation				$txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=			Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1

*/


/* Conditional Assignment Operators

Operator	Name		Example				Result	
?:			Ternary		$x = expr1 ? expr2 : expr3	Returns the value of $x.
				The value of $x is expr2 if expr1 = TRUE.
				The value of $x is expr3 if expr1 = FALSE	
??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7

*/

$x = ($a > 0) ? 1: 0;





