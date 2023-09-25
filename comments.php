<?php
    // 데이터베이스 연결
    $host = "localhost";
    $user = "root";
    $pw ="123456";
    $db = "sun";

    $dbcon = new mysqli($host, $user, $pw, $db);
  
    $dbcon -> set_charset("utf8");

    if (mysqli_connect_errno()) {
        echo "데이터베이스 접속실패";
        echo mysqli_connect_errno();
        exit();
    }

    // 댓글 달기
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $comment_content = $_POST['comment_content'];

    $sql = "INSERT INTO comments (nickname, password, comment_content) VALUES (?, ?, ?)";
    $stmt = $dbcon->prepare($sql);
    $stmt->bind_param("sss", $nickname, $password, $comment_content);
    $stmt->execute();

    // 댓글 목록 가져오기
    $sql = "SELECT * FROM comments ORDER BY created_at DESC";
    $result = $dbcon->query($sql);

    $comments = array();
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }

    // DB 연결 해제
    mysqli_close($dbcon);

    // 댓글 목록 반환
    return $comments;
?>
