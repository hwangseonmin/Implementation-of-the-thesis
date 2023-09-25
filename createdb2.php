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


$db_sel = mysqli_select_db($dbcon, "sun");

$sql2 = "CREATE TABLE `reply` ( `idx` INT NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(100) NOT NULL , 
`pw` VARCHAR(100) NOT NULL , 
`con_num` INT NULL , 
`date` DATE NOT NULL , 
`content` TEXT NOT NULL,
PRIMARY KEY (`idx`))";

mysqli_query($dbcon, $sql2);



mysqli_close($dbcon);
