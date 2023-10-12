<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // 사용자가 변경한 내용 가져오기
    $memberID = $_SESSION['memberID'];
    $boardID = $_POST['boardID'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $boardPass = $_POST['boardPass'];
    
    // echo $memberID, $boardID, $boardTitle, $boardContents, $boardPass;


    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);
    $boardPass = $connect -> real_escape_string($boardPass);

    $sql = "SELECT * FROM members WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        if($info['memberID'] === $memberID && $info['youPass'] === $boardPass){
            // 수정
            $sql = "UPDATE board SET boardTitle = '{$boardTitle}', boardContents='{$boardContents}' WHERE boardID='{$boardID}'";
            $connect -> query($sql);
            echo "<script>alert('게시글이 성공적으로 수정되었습니다.')</script>";
            echo "<script>window.location.href='board.php';</script>";

        }else {
            echo "<script>alert('비밀번호가 틀렸습니다. 다시 한번 확인해주세요!')</script>";
            echo "<script>window.history.back()</script>";
        }
    }else{
        echo "<script>alert('관리자에게 문의하세요!')</script>";
    }


 
    // // 메세지 출력
    // function msg($alert){
    //     echo "<p>$alert</p>";
    // }

    // $sql = "SELECT memberID, youPass FROM members WHERE memberID= '$memberID' AND youPass = '$boardPass'";
    // $result = $connect -> query($sql);

    // if($result){
    // $count = $result -> num_rows;
    //     if($count == 0){
    //         msg("비밀번호가 틀렸습니다. 다시 한번 확인해주세요.");
    //         // echo "<script> window.history.back(); </script>";
    //     }else{
    //         $boardTitle = $connect -> real_escape_string($boardTitle);
    //         $boardContents = $connect -> real_escape_string($boardContents);
    //         $boardID = $connect -> real_escape_string($boardID);
        
    //         // 변경할 내용 데이터베이스에 저장
    //         $sql = "UPDATE board SET boardTitle = '$boardTitle', boardContents = '$boardContents' WHERE boardID = '$boardID'";
    //         $connect -> query($sql);
        
    //         header("Location: ../board/board.php");
    //     }    
    // };




?>