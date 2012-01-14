<?php header("Content-type: text/xml\n\n"); ?>
<?php echo ('<?xml version="1.0" encoding="ISO-8859-1"?>' . "\n"); ?>
<?php  
echo'<front>';
$dir='/';
$dr=opendir('.');
$i = 0;
$images = array();

while ($file = readdir($dr)) {
	if(filetype($file)!="dir"){
$images[$i] = $file;
$i = $i+1;
}
}
sort($images);
foreach ($images as $elem) {
	if($elem != "." && $elem != ".." && $elem != "listar.php" && $elem !="error_log"){
echo '<portfolio pic="'.$elem.'"/>';
}
}
echo "</front>"; 
?>