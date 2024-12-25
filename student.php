<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    

<?php
$name = $nickname = $Phone_name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $nickname = test_input($_POST["nickname"]);
    $Phone_name = test_input($_POST["Phone_name"]);
}

function test_input($data) {
    $data = trim($data); // ลบช่องว่างข้างหน้าและข้างหลัง
    $data = stripslashes($data); // ลบ backslashes
    $data = htmlspecialchars($data); // ป้องกันโค้ด HTML
    return $data;
}
?>

<h1>PHP Form Validation Example</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <br>
  <label for="nickname">Nickname:</label>
  <input type="text" id="nickname" name="nickname">
  <br>
  <label for="Phone_name">Phone:</label>
  <input type="text" id="Phone_name" name="Phone_name">
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

<div class="output">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>ข้อมูลของคุณ:</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Nickname: " . htmlspecialchars($nickname) . "<br>";
    echo "Phone: " . htmlspecialchars($Phone_name) . "<br>";
}
?>
</div>

<div class="output">

<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Name: $name\n ";
fwrite($myfile, $txt);
$txt = "Nickname: $nickname\n ";
fwrite($myfile, $txt);
$txt = "Phone: $Phone_name\n \n ";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
echo "<h2>ข้อมูลที่บันทึกแล้ว:</h2>";
while(!feof($myfile)) {
    echo nl2br(fgets($myfile));
    
}
fclose($myfile);
?>

</div>
</body>
</html>
