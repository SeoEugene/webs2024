$(function () {
    // 메뉴
    $(".nav>ul>li").mouseover(function () {
        $(this).find(".submenu").stop().slideDown();
    });
    $(".nav>ul>li").mouseout(function () {
        $(this).find(".submenu").stop().slideUp();
    });

    // 슬라이드
    let currentIndex = 0;
    $(".sliderWrap").append($(".slider").first().clone(true));
    setInterval(function () {
        currentIndex++;
        $(".sliderWrap").animate({ marginTop: -400 * currentIndex + "px" }, 600);

        if (currentIndex == 3) {
            setTimeout(function () {
                $(".sliderWrap").animate({ marginTop: 0 }, 0);
                currentIndex = 0;
            }, 600);
        }
    }, 3000);

    // 탭메뉴
    $(".notice").click(function () {
        $(".notice").addClass("choose");
        $(".gallery").removeClass("choose");
    });
    $(".gallery").click(function () {
        $(".gallery").addClass("choose");
        $(".notice").removeClass("choose");
    });

    // 배너
    $(".notice:nth-child(1)").click(function () {
        $(".popup").removeClass("none");
    });
    $(".close").click(function () {
        $(".popup").addClass("none");
    });
})