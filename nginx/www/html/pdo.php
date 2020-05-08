<?php
//$servername = "localhost:3308";
//$servername = "127.0.0.1:3308";
//$servername = "172.19.0.2:3306";
$servername = "mysql57:3306";
$username = "root";
$password = "123456";

echo "begin connect by pdo ......!\n";

try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "连接成功"; 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
$conn = null;
echo "\nclose now!\n";
?>