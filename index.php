<form action="index.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
<?php
$filename = 'friends.txt';
/*if(isset($_POST["name"]))
{
    if($_POST["name"]!="")
    {
        $file = fopen( $filename, "a" );
        fwrite( $file, PHP_EOL.$_POST["name"] );
        fclose($file);
    }
}
*/
// appending to file
$file = fopen( $filename, "a" );
fwrite( $file, "some string" );
$friendsArray = array();
if($file != false){
    while(!feof($file)){
        $name = trim(fgets($file));
        if(strlen($name)>0) {
            $friendsArray[] = $name;
        }
    }
    fclose($file);
}
?>
