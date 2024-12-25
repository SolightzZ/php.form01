<!DOCTYPE html>
<html>
<body>


<?php
$myfile = fopen("readphp.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>


<br>

<?php
$myfile = fopen("readphp.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

?>

<br>

<?php
$myfile = fopen("readphp.txt", "r") or die("Unable to open file!");
echo "<p>Output one line until end-of-file </p>";
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<br>

<?php
$myfile = fopen("readphp.txt", "r") or die("Unable to open file!");

echo "<p> Output one line until end-of-file </p>";

while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

echo "<h1> PHP Overwriting </h1>";



</body>
</html>