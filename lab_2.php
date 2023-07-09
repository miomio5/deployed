<!DOCTYPE html>
<html lang="en">
<head><title>Running mysql queries</title></head>
<body>
<?php
$conn = new mysqli("localhost", "newuser", "password");
$sql_statement = "create database web";
$conn->query($sql_statement);
echo "created database<br>";
$sql_statement = "use web";
$conn->query($sql_statement);
$sql_statement = "CREATE TABLE `web`.`mytable` ( `name` VARCHAR(50) , `age` int)";
$conn->query($sql_statement);
echo "created table<br>";
$sql_statement = "insert into mytable values
('parul', 18), ('avi', 24), ('darsh', 44),
('manik', 63), ('harsh', 14)";
$conn->query($sql_statement);
echo "added data<br>";
$sql_statement = "update age = 46 where 'name'='prateek'";
$conn->query($sql_statement);
echo "updated one row<br>";
?>
</body>
</html>