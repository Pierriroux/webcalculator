<?php
class Calculator
{
  function sum($x, $y) {
  	return $x + $y;
  }

  function sub($x, $y) {
  	return $x - $y;
  }

  function mult($x, $y) {
  	return $x * $y;
  }

  function div($x, $y) {
  	return $x / $y;
  }
}
$calculator = new Calculator();
echo ($calculator->sum(5, 7) . "\n");
echo ($calculator->sub(8, 2) . "\n");
echo ($calculator->mult(2, 5) . "\n");
echo ($calculator->div(20, 4) . "\n");
?>
