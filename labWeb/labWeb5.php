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
$op= $_GET["op"];
$calculator = new Calculator();
switch($op)
{
  case "sum" : echo $_GET["x"] . " " . "+" . " " . $_GET["y"] . " " . "=" . " " . $calculator->sum($_GET["x"], $_GET["y"]);break;
  case "sub" : echo $_GET["x"] . " " . "-" . " " . $_GET["y"] . " " . "=" . " " . $calculator->sub($_GET["x"], $_GET["y"]);break;
  case "mult" : echo $_GET["x"] . " " . "*" . " " . $_GET["y"] . " " . "=" . " " . $calculator->mult($_GET["x"], $_GET["y"]);break;
  case "div" : echo $_GET["x"] . " " . "/" . " " . $_GET["y"] . " " . "=" . " " . $calculator->div($_GET["x"], $_GET["y"]);break;
  default: print "Fail";
}



?>
