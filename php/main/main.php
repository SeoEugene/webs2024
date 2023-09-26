<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="gray">
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">콘텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <header id="header" role="banner">
        <div class="header__inner container">
            <div class="left">
                <a href="/">
                    <span class="blind">메인으로</span>
                </a>
            </div>
            <div class="logo">
                <a href="main.html">Youjini Blog</a>
            </div>
            <div class="right">
                <ul>
                    <li><a href="join.html">회원가입</a></li>
                </ul>
            </div>
        </div>
        <nav class="nav__inner">
            <ul>
                <li><a href="join.html">회원가입</a></li>
                <li><a href="join.html">로그인</a></li>
                <li><a href="join.html">게시판</a></li>
                <li><a href="join.html">블로그</a></li>
            </ul>
        </nav>
    </header>
    <!-- //header -->

    <main id="main" role="main">
        <div class="intro__inner bmStyle container">
            <div class="intro__img">
                <img srcset="../html/assets/img/img01.jpg 1x,
                            ../html/assets/img/img01@2.jpg 2x,
                            ../html/assets/img/img01@3.jpg 3x" alt="소개이미지">
            </div>

            <div class="intro__text">
                어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                신입의 열정과 도전정신을 깊숙히 새기며 배움에 있어 겸손함을 유지하며
                세부적인 곳까지 파고드는 개발자가 되겠습니다.
            </div>
        </div>
    </main>
    <!-- //main -->

    <footer id="footer" role="contentinfo">
        <div class="footer__inner container btStyle">
            <div> Copyright 2023 Youjini blog</div>
            <div>blog by webs</div>
        </div>
    </footer>
    <!-- //footer -->
</body>

</html>