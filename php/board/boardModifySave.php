<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // 사용자가 변경한 내용 가져오기
    $memberID = $_SESSION['memberID'];
    $boardID = $_GET['boardID'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $boardPass = $_POST['boardPass'];

 
    // 메세지 출력
    function msg($alert){
        echo "<p>$alert</p>";
    }

    $sql = "SELECT memberID, youPass FROM members WHERE memberID= '$memberID' AND youPass = '$boardPass'";
    $result = $connect -> query($sql);

    if($result){
    $count = $result -> num_rows;
        if($count == 0){
            msg("비밀번호가 틀렸습니다. 다시 한번 확인해주세요.");
            // echo "<script> window.history.back(); </script>";
        }else{
            $boardTitle = $connect -> real_escape_string($boardTitle);
            $boardContents = $connect -> real_escape_string($boardContents);
            $boardID = $connect -> real_escape_string($boardID);
        
            // 변경할 내용 데이터베이스에 저장
            $sql = "UPDATE board SET boardTitle = '$boardTitle', boardContents = '$boardContents' WHERE boardID = '$boardID'";
            $connect -> query($sql);
        
            header("Location: ../board/board.php");
        }    
    };




?>