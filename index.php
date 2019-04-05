<form action="index.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
<?php
$filename = 'friend.txt';*
if(isset($_POST["name"])!="")
{
	if(isset($_POST["name"]))
	{
		$file = fopen( $filename, "a" );
		fwrite( $file, PHP_EOL.$_POST["name"] );
		fclose($file);
	}
}
$file = fopen( $filename, "r" );
while (!feof($file)) 
{
    $word = fgets($file);
    echo "<li>".$word."</li>";
}
fclose($file);
?>
