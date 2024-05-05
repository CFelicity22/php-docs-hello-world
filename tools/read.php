<!DOCTYPE html>
<html>
<body>
<style>
div {
    padding: 20px;
    border: 1px solid #4CAF50;
white-space: pre-wrap;.
}
</style>
<div>Content of:
<?php
echo $_POST["FileName"] ," ";
echo "</div><div>";
$fileName = $_POST["FileName"];
$myfile = fopen($fileName, "r") or die("Unable to open file!");
echo htmlspecialchars(fread($myfile,filesize($fileName)));
fclose($myfile);

?> 
</div>
</body>
</html>