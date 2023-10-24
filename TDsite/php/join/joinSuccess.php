<?php
    include "../connect/connect.php";
    include "../connect/session.php";
//     echo"<pre>";
//     var_dump($_SESSION);
//     echo"</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Device</title>
    <!-- css -->
    <?php include "../include/head.php"?>
    <style>
        /* main */
        #main {
            width: 100%;
            height: 90%;
            background-color: #fff;
        }
    
    </style>
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
                <a href="main.html" class="btn__style3">메인</a>
                <a href="login.html" class="btn__style3">로그인</a>
            </div>
        </main>
        <!-- //main -->

        <footer id="footer">
            <div class="container">
                <div class="footer__top">
                    <h2>Trend Device</h2>
                    <ul class="ft__list1">
                        <li>트렌드 디바이스</li>
                        <li>사업자등록번호:123-123-12345</li>
                        <li>통신판매업 신고:2000-경기안산-0111</li>
                    </ul>
                    <ul class="ft__list2">
                        <li>사업장 주소:경기도 안산시 단원구 고잔2길 45 코스모프라자 6층</li>
                        <li>대표번호:00-1234-1234</li>
                        <li>문의전화:00-1234-5678</li>
                    </ul>
                </div>
                <div class="footer__bottom">
                    <div class="fb__left">
                        <p>
                            본 사이트의 컨텐츠는 저작권법의 보호를 받는 바 무단 전재, 복사, 배포 등을 금합니다.
                        </p>
                        <ul>
                            <li>Copyright © 2023 TrendDevice. All Rights Reserved.</li>
                            <li>사이트맵</li>
                            <li>개인정보처리방침</li>
                            <li>고객센터</li>
                            <li>회원탈퇴</li>
                        </ul>
                    </div>
                    <div class="fb__right">
                        <span>
                            <img src="../assets/img/instargram__icon.png" alt="인스타그램">
                        </span>
                        <span>
                            <img src="../assets/img/facebook__icon.png" alt="인스타그램">
                        </span>
                        <span>
                            <img src="../assets/img/github__icon.png" alt="인스타그램">
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //footer -->
    </div>
    <!-- //wrap -->

    <!-- script -->
    <script src="../assets/script/script.js"></script>
</body>
</html>