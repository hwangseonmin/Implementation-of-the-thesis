<?php
$host = "localhost";
$user = "root";
$pw = "123456";

$dbcon = new mysqli($host, $user, $pw);

$dbcon->set_charset("utf8");

if (mysqli_connect_errno()) {
    echo "데이터베이스 접속실패";
    echo mysqli_connect_errno();
} else {
    echo "데이터베이스 접속성공<br>";
}

$sql = "create database sun";
mysqli_query($dbcon, $sql);

$db_sel = mysqli_select_db($dbcon, "sun");

$sql2 = "CREATE TABLE `board` ( `idx` INT NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(100) NOT NULL , 
`pw` VARCHAR(100) NOT NULL , 
`title` VARCHAR(100) NOT NULL , 
`content` TEXT NOT NULL , 
`date` DATE NOT NULL , 
`lock_post` INT NULL,
`hit` INT  ,
PRIMARY KEY (`idx`))";

mysqli_query($dbcon, $sql2);



mysqli_close($dbcon);
