<?php
    include "../connect/connect.php";
    include "../connect/session.php";


    $youName = mysqli_real_escape_string($connect, $_POST['youName']);
    $youEmail = mysqli_real_escape_string($connect, $_POST['youEmail']);
    $youPass = mysqli_real_escape_string($connect, $_POST['youPass']);
    $youBirth = mysqli_real_escape_string($connect, $_POST['youBirth']);
    $youPhone = mysqli_real_escape_string($connect, $_POST['youPhone']);
    $youAddress = mysqli_real_escape_string($connect, $_POST['youAddress']);
    $regTime = time();

    $sql = "INSERT INTO tdMembers(youName, youEmail, youPass, youBirth, youPhone, youAddress, regTime) VALUES ('$youName', '$youEmail', '$youPass', '$youBirth', '$youPhone', '$youAddress', '$regTime')";

    $connect -> query($sql);

    // 데이터 베이스 연결 닫기
    mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Device</title>

    <!-- css -->
    <?php include "../include/head.php"?>
</head>
<body>
    <div id="wrap">
    <?php include "../include/header.php"?>
        <!-- //header -->
        
        <?php include "../include/nav.php"?>
        <!-- //nav -->

        <main id="main">
            <div class="join__result container3">
                <div class="joinResult__title">
                    <h2>회원가입 완료</h2>
                </div>
                <div class="join__resultBox">
                    <img src="../../assets/img/icon__success.png" alt="회원가입 성공">
                    <p>회원가입이 정상적으로 완료되었습니다.<br>회원이 되신걸 환영합니다.</p>
                </div>
                <div class="join__btn">
                    <a href="../main/main.php" class="btn__style3">메인</a>
                    <a href="../login/login.php" class="btn__style3">로그인</a>
                </div>
            </div>
        </main>
        <!-- //main -->

        <?php include "../include/footer.php" ?>
        <!-- //footer -->
    </div>
    <!-- //wrap -->

    <!-- script -->
    <script src="../assets/script/script.js"></script>
</body>
</html>