$(function(){
    // 메뉴
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown();
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp();
    });

    // 슬라이드
    let currentImage = 0;
    $(".sliderWrap").append($(".slider").first().clone(true));

    setInterval(() => {
        currentImage++;
        $(".sliderWrap").animate({marginTop: -300 * currentImage+"px"}, 600);

        if(currentImage == 3){
            setTimeout(() => {
                $(".sliderWrap").animate({marginTop: 0}, 0);
                currentImage = 0;
            }, 600);
        }
    }, 3000);

    // 팝업
    $(".notice li:nth-child(1)").click(function(){
        $(".popupview").show();
    });
    $(".popupview .close").click(function(){
        $(".popupview").hide();
    });
})