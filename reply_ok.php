<?php
	include "db.php";

    $bno = $_GET['idx'];
    $userpw = password_hash($_POST['dat_pw'], PASSWORD_DEFAULT);
    $date = date('Y-m-d');

    if($bno && $_POST['dat_user'] && $userpw && $_POST['content']){
        $sql = mq("insert into reply(con_num,name,pw,content, date) values('".$bno."','".$_POST['dat_user']."','".$userpw."','".$_POST['content']."','".$date."')");
        echo "<script>alert('댓글이 작성되었습니다.'); 
        location.href='read.php?idx=$bno';</script>";
    }else{
        echo "<script>alert('댓글 작성에 실패했습니다.'); 
        history.back();</script>";
    }
	
?>