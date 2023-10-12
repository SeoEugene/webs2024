<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // 세션
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    // 총 페이지 갯수
    $sql = "SELECT count(boardID) FROM board";
    $result = $connect -> query($sql);

    $boardTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
    $boardTotalCount = $boardTotalCount['count(boardID)'];    
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 페이지</title>

    <!-- CSS -->
    <?php include "../include/head.php" ?>
</head>

<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" role="main">
        <div class="intro__inner bmStyle container">
            <div class="intro__img small">
                <img srcset="../assets/img/img01.jpg 1x,
                            ../assets/img/img01@2.jpg 2x,
                            ../assets/img/img01@3.jpg 3x" alt="소개이미지">
            </div>

            <div class="intro__text">
                <h2>게시판</h2>
                <p>
                    웹디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 게시판입니다.<br>
                    관련된 문의사항은 여기서 확인하세요!
                </p>
            </div>
        </div>

        <section class="board__inner container">
            <div class="board__search">
                    <div class="left">
                        * 총 <em><?=$boardTotalCount?></em>건의 게시물이 등록되어 있습니다.
                    </div>
                    <div class="right">
                        <form action="boardSearch.php" name="boardSearch" method="get">
                            <fieldset>
                                <legend class="blind">게시판 검색 영역</legend>
                                <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요!" required>
                                <select name="searchOption" id="searchOption">
                                    <option value="title">제목</option>
                                    <option value="content">내용</option>
                                    <option value="name">등록자</option>
                                </select>
                                <button type="submit">검색</button>
                                <a href="boardWrite.php">글쓰기</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="board__table">
                    <table>
                        <colgroup>
                            <col style="width: 5%;">
                            <col>
                            <col style="width: 10%;">
                            <col style="width: 15%;">
                            <col style="width: 7%;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>등록자</th>
                                <th>등록일</th>
                                <th>조회수</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    }else{
        $page = 1;
    }
    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    //1~10  LIMIT  0, 10  --> page1 ($viewNum = 10; * 1 ) - $viewNum
    //11~20 LIMIT 10, 10  --> page2 ($viewNum = 10; * 2 ) - $viewNum
    //21~30 LIMIT 20, 10  --> page3 ($viewNum = 10; * 3 ) - $viewNum
    //31~40 LIMIT 30, 10  --> page4 ($viewNum = 10; * 4 ) - $viewNums

    $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(b.memberID = m.memberID) ORDER BY boardID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i=0; $i<$count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);

                echo "<tr>";
                echo "<td>".$info['boardID']."</td>";
                echo "<td><a href='boardView.php?boardID={$info['boardID']}'>".$info['boardTitle']."</a></td>";
                echo "<td>".$info['youName']."</td>";
                echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                echo "<td>".$info['boardView']."</td>";
                echo "<tr>";
            }
        }else{
            echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
        }
    }else{
        echo "관리자에게 문의해주세요!";
    }
?>

                        </tbody>
                    </table>
                </div>
                <div class="board__pages">
                    <ul>
<?php
    // 총 페이지 갯수
    $boardTotalCount = ceil($boardTotalCount/$viewNum);

    $pageView = 5;
    $startPage = $page -$pageView;
    $endPage = $page + $pageView;
    
    // 처음 페이지 초기화 / 마지막 페이지 초기화
    if($startPage < 1) $startPage = 1;
    if($endPage >=  $boardTotalCount) $endPage = $boardTotalCount;

    // 처음으로/이전
    if($page != 1){
        $prevPage = $page -1;
        echo "<li class='first'><a href='board.php?page=1'>처음으로</a></li>";
        echo "<li class='prev'><a href='board.php?page={$prevPage}'>이전</a></li>";

    }
    // $first = 1;
    // echo "<li><a href='board.php?page={$first}'>처음으로</a></li>";

    // $prev =  $page - 1;
    // if($prev == 0) $prev = 1;
    // echo "<li><a href='board.php?page={$prev}'>이전</a></li>";


    //페이지
    for($i=$startPage; $i<=$endPage; $i++){
        // if($i == $page){
        //     echo "<li class='active'><a hreft='#'>${i}</a></li>";

        // }else{
        //     echo "<li><a hreft='#'>${i}</a></li>";
        // }
        
        $active = "";
        if($i == $page) $active = "active";
        echo "<li class='{$active}'><a href='board.php?page={$i}'>${i}</a></li>";
    }

    //마지막으로/다음
    if($page != $boardTotalCount){
        $nextPage = $page + 1;
        echo "<li class='next'><a href='board.php?page={$nextPage}'>다음</a></li>";
        echo "<li class='last'><a href='board.php?page={$boardTotalCount}'>마지막으로</a></li>";

    }
        // $next = $page + 1;
        // if($next > $endPage) $next = $endPage;
        // echo "<li><a href='board.php?page={$next}'>다음</a></li>";
        // $last = $boardTotalCount; 
        // echo "<li><a href='board.php?page={$last}'>마지막으로</a></li>";
?>
                    </ul>
                </div>
        </section>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>

</html>