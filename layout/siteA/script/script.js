$(function () {
    // menu
    $(".nav>ul>li").mouseover(function () {
        $(this).find($(".submenu")).stop().slideDown(300);
    });
    $(".nav>ul>li").mouseout(function () {
        $(this).find($(".submenu")).stop().slideUp(300);
    });

    // slider
    let currentIndex = 0;

    setInterval(function () {
        let nextIndex = (currentIndex + 1) % 3;
        $(".slider").eq(nextIndex).fadeIn(1200);
        $(".slider").eq(currentIndex).fadeOut(1200);
        currentIndex++;
    }, 3000);

    // tab
    $(".content1 > .menu > a:nth-child(1)").click(function () {
        $(".content1 > .menu > a:nth-child(1)").removeClass(active);
        $(".content1 > .menu > a:nth-child(2)").addClass(active);

    });
});