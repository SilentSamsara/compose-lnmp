<?php
$servername = "mysql57:3306";
$username = "root";
$password = "123456";
$dbname="myDB";  
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // 开始事务
    $conn->beginTransaction();
    // SQL 语句
    $conn->exec("INSERT INTO S(sno,sname,sex) VALUES 
    ('031700000','小明','M'),
    ('031700001','小红','G'),
    ('031700002','小张','M')");
 
    // 提交事务
    $conn->commit();
    echo "数据插入成功!";
}
catch(PDOException $e)
{
    // 如果执行失败回滚
    $conn->rollback();
    echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
?>