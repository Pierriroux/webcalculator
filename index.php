<form action="index.php" method="post">
Name: <input type="text" name="name">
<input type="submit">
</form>
<?php
$filename = 'friends.txt';
$file = fopen( $filename, "r" );
while (!feof($file)) {
    // reading file
}

// appending to file
$file = fopen( $filename, "a" );
fwrite( $file, "some string" );
?>
$file = Fopen($filename,"r");
$friendsArray = array();
if($file != false){
    while(!feof($file)){
        $name = trim(fgets($file));
        if(strlen($name)>0) {
            $friendsArray[] = $name;
        }
    }
    fclose($file);
    
    if(isset($_POST['name'] && strlen(
