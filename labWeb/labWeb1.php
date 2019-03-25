<?php
$names = array("Patrick", "John", "Marie", "Claire", "Paul");
foreach ($names as $name) {
    if(strpos($name, 'Pa')===0)
      {
        print "$name, ";
      }
}
?>
