
<form action="index.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
<?php
$filename = 'friend.txt';
$file = fopen( $filename, "r" );
while (!feof($file)) 
{
/*    $filecontents = file_get_contents('words.txt');
    $words = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
    print_r($words);*/
	$word=fgets($file);
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
	}
}
fclose($file);
?>
