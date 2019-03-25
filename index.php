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
