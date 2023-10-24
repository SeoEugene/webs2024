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
        #modal.modal-overlay {
            width: 100%;
            height: 100%;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(1.5px);
            -webkit-backdrop-filter: blur(1.5px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            z-index: 1000;
        }

        #modal.modal-overlay {
            display: none;
        }

        /* 스크롤 비활성화 스타일 */
        body.disable-scroll {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div id="wrap">

        <div class="mouse__cursor none"></div>
        <?php include "../include/header.php"?>
        <!-- //header -->
        
        <?php include "../include/nav.php"?>
        <!-- //nav -->



        <main id="main">
            <div id="slider">
                <div class="sliderWrap">
                    <div class="slider s1">
                        <span>
                            <strong>테스트</strong><br>
                            티타늄. 초강력. 초경량. 초프로.<br>
                            <i>10월 13일 출시</i><br>
                            <a>더 알아보기 ></a>
                        </span>
                    </div>
                    <div class="slider s2">
                        <span>
                            <strong>iPhone 15 Pro</strong><br>
                            티타늄. 초강력. 초경량. 초프로.<br>
                            <i>10월 13일 출시</i><br>
                            <a>더 알아보기 ></a>
                        </span>
                    </div>
                    <div class="slider s3">
                        <span>
                            <strong>iPhone 15 Pro</strong><br>
                            티타늄. 초강력. 초경량. 초프로.<br>
                            <i>10월 13일 출시</i><br>
                            <a>더 알아보기 ></a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- <div class="main__img1">
                <img src="../assets/img/slider04-min.jpg" alt="">
            </div>
            <div class="main__img2">
                <img src="../assets/img/slide01-min.jpg" alt="">
            </div> -->




            <div id="modal" class="modal-overlay">
                <div class="modal">
                    <div class="modal__header">
                        <h2>제품 사양</h2>
                        <div class="modal__close"></div>
                    </div>

                    <div class="modal__body">
                        <div class="modal__img">
                            <img src="../assets/img/info-min.jpg" alt="제품 사진">
                        </div>
                        <div class="spec">
                            <ul>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">A17Pro</div>
                                    <h5>Process</h5>
                                </li>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">17.0cm</div>
                                    <h5>Display</h5>
                                </li>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">A17</div>
                                    <h5>Camera</h5>
                                </li>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">A17</div>
                                    <h5>Battery</h5>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="text">15.9 x 76.7 x 8.25</div>
                                    <h5>Size</h5>
                                </li>
                                <li>
                                    <div class="text">221g</div>
                                    <h5>weight</h5>
                                </li>
                                <li>
                                    <div class="text">
                                        256GB 512GB 1TB
                                    </div>
                                    <h5>Capacity</h5>
                                </li>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">USB-C</div>
                                    <h5>USB-TYPE</h5>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- //modal -->
            </div>
            <!-- //modal-overlay -->



            <!-- 이미지 고정 -->
            <div class="parallax__cont">
                <section id="section1" class="parallax__item">
                    <span class="item__name t1">갤럭시 플립5</span>
                    <span class="item__desc t2">갤럭시 Z 플립 사상</span>
                    <span class="item__desc t3">갤최대 크기의 커버 스크린,</span>
                    <span class="item__desc t4">플렉스 윈도우</span>
                    <span class="item__img"></span>
                </section>
                <!-- //section1 -->

                <section id="section2" class="parallax__item">
                    <span class="parallax__item__img i1"></span>
                    <span class="parallax__item__img i2"></span>
                    <span class="parallax__item__img i3"></span>
                    <span class="parallax__item__img i4"></span>
                </section>
                <!-- //section2 -->

                <section id="section3" class="parallax__item">
                    <span class="item__name t1">아이폰15</span>
                    <span class="item__desc t2">USB‑C.</span>
                    <span class="item__desc t3">호환성의 아이콘.</span>
                    <span class="item__desc t4"></span>
                    <span class="item__img"></span>
                </section>
                <!-- //section3 -->

                <!-- <section id="section4">
                <div class="section4__img"></div>
                <div class="section4__thumb"></div>
                <div class="section4__btn">
                    <a href="#" class="prev" title="왼쪽이미지">prev</a>
                    <a href="#" class="next" title="다음이미지">next</a>
                </div>
            </section> -->
                <!-- //section4 -->


                <section id="section5" class="parallax__item">
                    <span class="item__img"></span>
                </section>
                <!-- //section5 -->

                <section id="section6" class="parallax__item">
                    <span class="item__name t1">갤럭시Z폴드5</span>
                    <span class="item__desc t2">보다 가볍고</span>
                    <span class="item__desc t3">한 손에 들어오는</span>
                    <span class="item__desc t4">디자인</span>
                    <span class="item__img"></span>
                </section>
                <!-- //section6 -->
            </div>




            <div class="intro__inner container">
                <div class="intro__header">
                    <h2>Trend Device를 소개합니다.</h2>
                    <p>
                        Trend는 소비자들이 다양한 스마트폰 모델을 비교하고 최적의 선택을 할 수 있도록 도와주는 웹 사이트입니다.<br>
                        휴대폰 모델, 기능, 가격, 성능, 디자인 등과 같은 다양한 요소를 비교하고 평가해보세요!
                    </p>
                </div>
                <!-- //intro__header -->

                <div class="intro__images">
                    <div class="intro__img">
                        <img src="../assets/img/icon__compare.png" alt="스마트폰 비교하기">
                        <span>스마트폰 비교하기</span>
                    </div>
                    <div class="intro__img">
                        <img src="../assets/img/icon__join.png" alt="회원가입">
                        <span>회원가입</span>
                    </div>
                    <div class="intro__img">
                        <img src="../assets/img/icon__comunity.png" alt="커뮤니티">
                        <span>커뮤니티</span>
                    </div>
                </div>
                <!-- //intro__img -->

                <div class="intro__footer">
                    <span>이미 회원이신가요?</span>
                    <div class="intro__btn">
                        <a href="#">로그인</a>
                    </div>
                </div>
                <!-- //intro__footer -->
            </div>

        </main>
        <!-- //main -->

        <?php include "../include/footer.php" ?>
        <!-- //footer -->

    </div>
    <!-- //wrap -->
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- script -->
    <script>
        // 메뉴
        let header = document.querySelector("#header");
        let nav = document.querySelector("#nav");
        let hamMenu = document.querySelector("#header .header__ham");
        let hamShape = document.querySelector("#header .header__ham div");







        function showNav() {
            nav.style.height = "360px";
            hamShape.classList.add("hamX");
            hamShape.classList.remove("ham");
        };
        function hideNav() {
            nav.style.height = "0";
            hamShape.classList.add("ham");
            hamShape.classList.remove("hamX");
        };

        hamMenu.addEventListener("mouseover", showNav);
        hamMenu.addEventListener("mouseout", hideNav);

        nav.addEventListener("mouseover", showNav);
        nav.addEventListener("mouseout", hideNav);


        window.onload = () => {
            // 슬라이드
            let currentIndex = 0;   //현재 이미지
            const sliderWrap = document.querySelector(".sliderWrap");   //전체 이미지
            const slider = document.querySelectorAll(".slider");    //각각이미지
            const sliderClone = sliderWrap.firstElementChild.cloneNode(true);
            sliderWrap.appendChild(sliderClone);

            let slideInterval;
            //마우스
            const mouseCursor = document.querySelector(".mouse__cursor");
            const modal = document.querySelector(".modal");
            const modalClose = modal.querySelector(".modal__close");
            const sliderID = document.querySelector("#slider");


            function slide() {
                currentIndex++;
                sliderWrap.style.transition = "all 0.6s";   //애니메이션 추가
                sliderWrap.style.marginLeft = -currentIndex * 100 + "%";  //왼쪽으로 100%씩 이동

                if (currentIndex == slider.length) {
                    setTimeout(() => {
                        sliderWrap.style.transition = "0s";
                        sliderWrap.style.marginLeft = "0";
                        currentIndex = 0;
                    }, 1000);
                }
            }

            // 슬라이드 섹션 고정
            // ScrollTrigger.create({
            //     trigger: sliderID,
            //     start: "top top",
            //     // end: "+= 3000",
            //     pin: true,
            //     markers: true
            // });

            // 모달창
            const Modal = document.getElementById("modal");

            sliderID.addEventListener("click", e => {
                Modal.style.display = "flex";
                document.body.classList.add('disable-scroll');
                clearInterval(slideInterval);

            });

            modalClose.addEventListener("click", () => {
                Modal.style.display = "none"
                document.body.classList.remove('disable-scroll');
                slideInterval = setInterval(slide, 5000);
            });

            sliderID.addEventListener("mousemove", e => {
                mouseCursor.classList.remove("none");
                gsap.to(".mouse__cursor", {
                    duration: .2,
                    left: e.pageX,
                    top: e.pageY
                });

                // 마우스 좌표 값
                let mousePageX = e.pageX;
                let mousePageY = e.pageY;

                let centerPageX = window.innerWidth / 2 - mousePageX;
                let centerPageY = window.innerHeight / 2 - mousePageY;


            });
            sliderID.addEventListener("mouseleave", e => {
                mouseCursor.classList.add("none");
            });

            slideInterval = setInterval(slide, 5000);

        };

        // 애니메이션
        const ani = gsap.timeline();
        ani.from("#section1 .t1", { xPercent: 300 }, "text")
            .from("#section1 .t2", { xPercent: 300 }, "text")
            .from("#section1 .t3", { xPercent: 300 }, "text")
            .from("#section1 .t4", { xPercent: 300 }, "text")

        ScrollTrigger.create({
            animation: ani,
            trigger: "#section1",
            start: "top top",
            end: "+=1000",
            scrub: true,
            pin: true
        });

        const ani2 = gsap.timeline();
        ani2.from("#section2 .i1", { y: -200, autoAlpha: 0, borderRadius: 200 })
            .from("#section2 .i2", { y: -200, autoAlpha: 0, borderRadius: 200 })
            .from("#section2 .i3", { y: -200, autoAlpha: 0, borderRadius: 200 })
            .from("#section2 .i4", { y: -200, autoAlpha: 0, borderRadius: 200 });

        ScrollTrigger.create({
            animation: ani2,
            trigger: "#section2",
            start: "top top",
            end: "+=3000",
            scrub: true,
            pin: true,
            anticipatePin: 1,
        });

        // const ani3 = gsap.timeline();
        // ani3.to("#section2 .i1", { x: 500, borderRadius: 100, duration: 2 })
        //     .to("#section2 .i2", { x: 500, borderRadius: 100, duration: 2 })
        //     .to("#section2 .i3", { x: 500, borderRadius: 100, duration: 2 })
        //     .to("#section2 .i4", { x: 500, borderRadius: 100, duration: 2 });

        // ScrollTrigger.create({
        //     animation: ani3,
        //     trigger: "#section2",
        //     start: "top top", 
        //     end: "+=3000",
        //     scrub: false,
        // });

        // const animation = gsap.timeline();
        // animation.from("#section2 .i1", { y: -200, autoAlpha: 0, borderRadius: 200 })
        //     .from("#section2 .i2", { y: -200, autoAlpha: 0, borderRadius: 200 })
        //     .from("#section2 .i3", { y: -200, autoAlpha: 0, borderRadius: 200 })
        //     .from("#section2 .i4", { y: -200, autoAlpha: 0, borderRadius: 200 });

        // animation.to({ x: 500, autoAlpha: 0, duration: 2, rotation: 360, ease: "power1.out" });
        // ScrollTrigger.create({
        //     animation: animation,
        //     trigger: "#section2", // 애니메이션이 시작하는 위치
        //     start: "top top", // 애니메이션이 트리거와 맞닿는 시점
        //     end: "+=6000", // 애니메이션의 지속 시간
        //     scrub: false, // 스크롤에 따라 애니메이션이 따라가지 않도록 설정
        // });


        const ani4 = gsap.timeline()
        ani4.from("#section3 .t1", { x: innerWidth * 1 })
            .from("#section3 .t2", { x: innerWidth * -1 })
            .from("#section3 .t3", { x: innerWidth * 1 })
            .from("#section3 .t4", { x: innerWidth * -1 });

        ScrollTrigger.create({
            animation: ani4,
            trigger: "#section3",
            start: "top top",
            end: "+=4000",
            scrub: true,
            anticipatePin: 1,
            pin: true
        });


        // let section4Image = [
        //     "../assets/img/animation06-min.jpg",
        //     "../assets/img/animation07-min.jpg",
        //     "../assets/img/animation08-min.jpg",
        //     "../assets/img/animation09-min.jpg",
        //     "../assets/img/animation10-min.jpg",
        //     "../assets/img/animation11-min.jpg",
        // ];
        // function section4Slider(parent, images){
        //     let currentIndex = 0;

        //     //선택자
        //     let section4 = {
        //         parent: parent,
        //         images: parent.querySelector(".slider")
        //     }
        // }


        const ani5 = gsap.timeline();
        ani5.from("#section5 .item__img", {
            autoAlpha: 0,
            scale: 2,
            width: "100vw",
            height: "100vh"
        });

        ScrollTrigger.create({
            animation: ani5,
            trigger: "#section5",
            start: "top top",
            end: "+=3000",
            scrub: true,
            pin: true

        });

        const ani6 = gsap.timeline()
        ani6.from("#section6 .t1", { x: innerWidth * 1 })
            .from("#section6 .t2", { x: innerWidth * -1 })
            .from("#section6 .t3", { x: innerWidth * 1 })
            .from("#section6 .t4", { x: innerWidth * -1 });

        ScrollTrigger.create({
            animation: ani6,
            trigger: "#section6",
            start: "top top",
            end: "+=4000",
            scrub: true,
            anticipatePin: 1,
            pin: true
        });


    </script>
</body>

</html>