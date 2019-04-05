
<form action="index.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
<?php
$filename = 'friend.txt';
$array = [];
if(isset($_POST["name"]))
{
	if($_POST["name"]!="")
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
    if(isset($_GET["nameFilter"]))
    {
	    if(isset($_GET["startingWith"]))
	    {
		    $position = strpos($word,$_GET["nameFilter"]);
		    if($position !== false)
		    {
				    echo "<li>".$word."</li>";
		    }
			    
	    }
	    else
	    {
	    	if(strstr($word,$_GET["nameFilter"]))
	    	{
		    echo "<li>".$word."</li>";
	    	}
	    }
	    

	    
    }
    else
    {
	    echo "<li>".$word."</li>";
    }
}

fclose($file);
?>
<form action="index.php" method="get">
	<input type="text" name="nameFilter" value="<?=$nameFilter?>">
	<input type="checkbox" name="startingWith" <?php if ($startingWith=='TRUE') echo "checked"?> value="TRUE">Only names starting with</input>
	<input type="submit">
</form>
