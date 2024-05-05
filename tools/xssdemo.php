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
<div>Welkom met reflected xss voor querystring naam:
<?php
echo $_GET["naam"] ," ";
echo "</div><div>Met encoding: ";
echo htmlspecialchars($_GET["naam"] );

echo "</div><div>Stored xss from file: </div>";

$fileName = $_GET["file"];
$myfile = fopen($fileName, "r") or die("Unable to open file!");
$inhoudFile = fread($myfile,filesize($fileName));
echo $inhoudFile;
echo "<div>Inhoud file met encoding</div>";
echo htmlspecialchars($inhoudFile);
fclose($myfile);

?> 
</div>
</body>
</html>