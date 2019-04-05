<form action="index.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
<?php
$filename = 'friend.txt';
$file = fopen( $filename, "r" );
if(isset($_POST["name"]))
{
	$file = fopen( $filename, "a" );
	fwrite( $file, PHP_EOL.$_POST["name"] );
	fclose($file);
}
while (!feof($file)) 
{
    $name = fgets($file);
    echo "<li>".$name."</li>";
/*	$word=fgets($file);
	if(isset($_GET["nameFilter"]))
	{
		if (isset($_GET["startingWith"]))
		{
			$pos = strpos(strtolower ($word), strtolower ($_GET["nameFilter"]));
			if ($pos !== false) 
			{
				if($pos===0)
				echo "<li>".$word."</li>";
			}
			
		}
		else
		{
			if(strstr(strtolower ($word),strtolower ($_GET["nameFilter"])))
				{echo "<li>".$word."</li>";}
		}
	}
	else
	{
		echo "<li>".$word."</li>";
    }*/
}
fclose($file);
?>
