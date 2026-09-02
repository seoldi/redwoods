<style>#top_btn {display: none;}</style>
<div id="main" class="main-scroll">
  <div id="fullpage">
    <section class="section intro">
        <div class="intro-txt">
            <div class="inner">
                <p class="sign"><img src="<?php echo G5_THEME_IMG_URL ?>/slider_tl.svg"></p>
                <p class="open"><strong></strong> GRAND OPEN</p>
                <p class="copy">이마트트레이더스 <strong>바로 앞</strong><br>부산시민공원 <strong>바로 옆</strong></p>
                <p class="title"><strong class="point2">완벽한 입지</strong>의 기준!</p>
                <p class="tag"># <span>APT</span> 80세대<br># <span class="ot">O&nbsp;·&nbsp;T</span> 66실<br># 서면 첫 경남아너스빌</p>
            </div>
            <div id="bx-pager" class="pager">
                <a data-slide-index="0" href=""></a>
                <a data-slide-index="1" href=""></a>
                <a data-slide-index="2" href=""></a>
                <a data-slide-index="3" href=""></a>
            </div>
        </div>
        <div class="bxslider intro-slider">
            <!-- 슬라이드 1 -->
            <div class="intro-1" data-anchor="slide1">
                <div class="intro-img"><img src="<?php echo G5_THEME_IMG_URL ?>/main_bg01.jpg"></div>
            </div>
            <!-- 슬라이드 2 -->
            <div class="intro-2" data-anchor="slide2">
                <div class="intro-img"><img src="<?php echo G5_THEME_IMG_URL ?>/main_bg02.jpg"></div>
            </div>
            <!-- 슬라이드 3 -->
            <div class="intro-3" data-anchor="slide3">
                <div class="intro-img"><img src="<?php echo G5_THEME_IMG_URL ?>/main_bg03.jpg"></div>
            </div>
            <!-- 슬라이드 4 -->
            <div class="intro-4" data-anchor="slide4">
                <div class="intro-img"><img src="<?php echo G5_THEME_IMG_URL ?>/main_bg04.jpg"></div>
            </div>
        </div>
    </section>
    <section class="section story">
        <div class="inner">
            <img src="<?php echo G5_THEME_IMG_URL ?>/sign(w).png">
            <p>완벽함의 <strong>Entero</strong>와
            집을 의미하는 <strong>Casa</strong>의 만남
               <span><strong>서면 경남아너스빌 엔테로까사</strong></span>80여년 건축기술의 SM동아건설산업이 
                당신에게 완벽한 주거공간을 선물합니다.</p>
            <a href="/bbs/content.php?co_id=brand">브랜드 스토리</a>
        </div>
        <!-- <div class="video-background">
            <div class="video-foreground">
                <iframe src="https://www.youtube.com/embed/RoQGKBGUnsE?autoplay=1&loop=1&modestbranding=1&controls=0&mute=1;playlist=RoQGKBGUnsE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div> -->
        <video data-autoplay loop muted>
            <source src="<?php echo G5_THEME_IMG_URL ?>/video.mp4" type="video/mp4">
        </video>
    </section>
    <section class="section premium">
        <div class="inner">
            <div class="left mo">
                <img src="<?php echo G5_THEME_IMG_URL ?>/main_premium(m).jpg">
            </div>
            <div class="left pc">
                <div class="title"><img src="<?php echo G5_THEME_IMG_URL ?>/main_premium.svg"></div>
                <div class="build"><img src="<?php echo G5_THEME_IMG_URL ?>/main_premium.png"></div>
                <!-- <div class="brush">
                    <!-- <svg id="mask" data-name="mask" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 832.89 366.71"><path class="cls-1" d="M.11,499.9S83,434.28,166,282.28s130-77,130-67-4,162,34,171,45-22,45-22,95-235,130-230,53,19,45,43-84,216-29,251,105-18,151-22,91-31,160,51" transform="translate(0.39 -133.7)" stroke-width="120" style="stroke: #f5f5f5"/></svg> -->
                    <!-- <img src="<?php echo G5_THEME_IMG_URL ?>/brush.png">
                </div> --> 
                <div class="triple">
                    <?php
                        include_once(G5_THEME_PATH.'/main_premium.php');
                    ?>
                    <!-- <div class="inner">
                        <svg width="722" height="373" viewBox="0 0 722 373" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 364L585 1L721.5 372" stroke="white"/></svg>
                        <span class="circle circle-1"></span>
                        <span class="circle circle-2"></span>
                        <span class="circle circle-3"></span>
                    </div> -->
                </div>
            </div>
            <div class="right">
                <p class="title"><span class="blue">PRE</span>MIUM <strong>7</strong></p>
                <div class="premium-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide premium-1">
                            <div class="cont">
                                <p class="tl">완벽한 <strong class="point2">교통</strong></p>
                                <p class="explain">쿼드러플 역세권의<br> 
                                <strong>Traffic Hub</strong></p>
                                <p class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/main-premium-01.png"></p>
                                <span class="small-txt">* 본 역세권은 간접역세권 기준임(1.5km이내)</span>
                            </div>
                        </div>
                        <div class="swiper-slide premium-2">
                            <div class="cont">
                                <p class="tl">완벽한 <strong class="point2">생활</strong></p>
                                <p class="explain">쇼핑과 놀이를 한번에 즐기는<br>
                                완벽한 <strong>City Life Infra</strong></p>
                                <p class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/main-premium-02.png"></p>
                                <span class="small-txt" style="color: #172d53">내용없음</span>
                            </div>
                        </div>
                        <div class="swiper-slide premium-3">
                            <div class="cont">
                                <p class="tl">완벽한 <strong class="point2">KTX</strong></p>
                                <p class="explain">KTX 부전역 복합환승센터 <span>(예정)</span>로<br>
                                완벽한 <strong>전국 교통망 Link Up</strong></p>
                                <p class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/main-premium-03.png"></p>
                                <span class="small-txt">* 2023년 착공 예정</span>
                            </div>
                        </div>
                        <div class="swiper-slide premium-4">
                            <div class="cont">
                                <p class="tl">완벽한 <strong class="point2">비전</strong></p>
                                <p class="explain">쏟아지는 개발호재의<br>
                                완벽한 <strong>Future Vision</strong></p>
                                <p class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/main-premium-04.png"></p>
                                <span class="small-txt" style="color: #172d53">내용없음</span>
                            </div>
                        </div>
                        <div class="swiper-slide premium-5">
                            <div class="cont">
                                <p class="tl">완벽한 <strong class="point2">에코</strong></p>
                                <p class="explain">부산시민공원과 황령산을 뷰에 담은<br>
                                완벽한 <strong>Green & Healing</strong></p>
                                <p class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/main-premium-05.png"></p>
                                <span class="small-txt">* 세대별 배치에 따라 상이할 수 있음</span>
                            </div>
                        </div>
                        <div class="swiper-slide premium-6">
                            <div class="cont">
                                <p class="tl">완벽한 <strong class="point2">설계</strong></p>
                                <p class="explain">Trendy Modern & Soft Natural<br>
                                컨셉으로 만든 완벽한 <strong>세대설계</strong></p>
                                <p class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/main-premium-06.png"></p>
                                <span class="small-txt" style="color: #172d53">내용없음</span>
                            </div>
                        </div>
                        <div class="swiper-slide premium-7">
                            <div class="cont">
                                <p class="tl">완벽한 <strong class="point2">가치</strong></p>
                                <p class="explain">재계순위 34위 SM그룹의 건설부문<br>
                                <strong>SM동아건설산업</strong></p>
                                <p class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/main-premium-07.png"></p>
                                <span class="small-txt">* 2022년 4월 기준 재계순위 34위</span>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="btn-wrap">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section least fp-auto-height">
        <!-- <div class="inner">
            <div class="news">
                <h3>NEWS</h3>
                <ul>
                    <li>
                        <p>[중앙일보] ‘평택역 경남아너스빌 디아트’, 오는 31일부터 정당계약</p>
                        <p><span>Jun</span><span>27</span></p>
                    </li>
                    <li>
                        <p>언론보도 게시판의 최근 게시물이 노출되는 공간입니다.</p>
                        <p><span>Jun</span><span>11</span></p>
                    </li>
                    <li>
                        <p>최신 순으로 정렬됩니다.</p>
                        <p><span>Jun</span><span>05</span></p>
                    </li>
                    <li>
                        <p>글이 길어지면 줄바꿈 되지 않고 말줄임표가 나타납니다.</p>
                        <p><span>Jun</span><span>05</span></p>
                    </li>
                </ul>
            </div>
            <div class="customer">
                <a href="#" class="item">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main_link_1.png">
                    <p>공급일정</p>
                </a>
                <a href="#" class="item">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main_link_2.png">
                    <p>관심고객등록</p>
                </a>
            </div>
        </div> -->
        <div id="ft" class="footer">
            <div class="copyright container">
                <div class="info">
                    <p>분양문의 <strong>051-759-8910</strong></p>
                    <p>APT 80 세대 / O<em>·</em>T 66 실</p>
                </div>
                <div class="address">
                    <div class="left">
                        <p>현장 : 부산광역시 부산진구 부암동 80-53번지</p>
                        <p>견본주택 :  부산광역시 수영구 광안동 331-6번지 (금련산역 2번 출구)</p>
                        <p>홈페이지제작 · 광고대행 : <?php if($is_member) { ?>
                            <a href="/bbs/content.php?co_id=latest" style="color: #A4A4A4">
                            <?php } else { ?>
                            <a href="javascript:void(0);" class="SignIn" style="color: #A4A4A4">
                            <?php } ?>㈜정권기획</a> l 대표 : 정헌철</p>
                        <p class="txt-dark">※ 본 홍보물에 사용된 CG, 이미지 등은 소비자의 이해를 돕기 위한 것으로 주변환경개발계획, 교통 여건 등이 실제와 상이할 수 있습니다.<br>
                        ※ 본 홍보물에 기재된 내용은 사업 및 인허가 및 정부시책에 따라 변경 및 취소 될 수 있습니다.<br>
                        ※ 본 홍보물은 편집 및 인쇄과정상 오류가 있을 수 있으니 자세한 사항은 문의해 주시기 바랍니다.<br>
                        ※ 분양광고 이후 관계 법령, 조례, 각종 계획의 변경 등으로 도시기반 시설 등이 변경될 수 있습니다.<br>
                        ※ 본 홍보물은 민·형사상 소송의 자료로 사용할 수 없습니다.</p>
                    </div>
                    <div class="right">
                        <p><span class="txt-dark">시행수탁사</span><img src="<?php echo G5_THEME_IMG_URL ?>/footer_1.svg" alt="우리자산신탁"></p>
                        <p><span class="txt-dark">시행사</span><img src="<?php echo G5_THEME_IMG_URL ?>/footer_2.svg" alt="㈜엘오케이디앤씨"></p>
                        <p><span class="txt-dark">시공사</span><img src="<?php echo G5_THEME_IMG_URL ?>/footer_3.svg" alt="SM동아건설산업"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
</div>

<!--팝업 컨텐츠 영역-->
<div id="popup-wrap">
    <div class="inner">
        <div class="popup" name="popup1">
            <img src="<?php echo G5_THEME_IMG_URL ?>/popup/long_5.jpg">
            <!-- <p><a href="#">무순위입주자공고 바로가기</a></p> -->
            <a href="#" class="btn_close">x</a>
            <span><input type="checkbox" name="today_close1" />오늘만 이 창을 열지 않음</span>
        </div>
        <div class="popup" name="popup2">
            <img src="<?php echo G5_THEME_IMG_URL ?>/popup/long_6.jpg">
            <a href="#" class="btn_close">x</a>
            <span><input type="checkbox" name="today_close3" />오늘만 이 창을 열지 않음</span>
        </div>
        <div class="popup" name="popup3">
            <img src="<?php echo G5_THEME_IMG_URL ?>/popup/long_3.jpg">
            <p><a href="/theme/honorsville/vr/" target="_blank">항공 VR보기</a></p>
            <a href="#" class="btn_close">x</a>
            <span><input type="checkbox" name="today_close4" />오늘만 이 창을 열지 않음</span>
        </div>
        <!-- <div class="popup" name="popup4">
            <img src="<?php echo G5_THEME_IMG_URL ?>/popup/popup_8.jpg">
            <p><a href="/bbs/content.php?co_id=guide_5">서류 안내 바로가기</a></p>
            <a href="#" class="btn_close">x</a>
            <span><input type="checkbox" name="today_close2" />오늘만 이 창을 열지 않음</span>
        </div>
        <div class="popup" name="popup5">
            <img src="<?php echo G5_THEME_IMG_URL ?>/popup/popup_7.jpg">
            <p><a href="/theme/honorsville/vr/" target="_blank">항공 VR보기</a></p>
            <a href="#" class="btn_close">x</a>
            <span><input type="checkbox" name="today_close5" />오늘만 이 창을 열지 않음</span>
        </div> -->
    </div>
</div>

<!--Fullpage -->
<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/plugin/fullpage/jquery.fullPage.css" />
<script src="<?php echo G5_THEME_URL; ?>/plugin/fullpage/jquery.fullPage.js"></script>

<!--Swiper-->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

<script>
    $(document).ready(function() {
        //풀페이지 스크롤
        $('#fullpage').fullpage({
            //options here
            licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',  // 무료 사용시 해당 라이센스 카피할 것(반드시 있어야함)
            navigation: true,  //우측페이저유무
            navigationPosition: 'right', // left,right(default) 페이저 위치
            autoScrolling:true,
            scrollHorizontally: true,
            slidesNavigation: true, // 슬라이드섹션 네비게이션 유무
            slidesNavPosition: 'bottom', //네비게이션 위치 (top,bottom)
            // navigationTooltips: ['firstSlide', 'secondSlide'], //navigation active시 타이틀 노출여부(hover포함)
            // showActiveTooltip: true,  //네비게이션 hover(default:false)시 툴팁 표기
            fitToSection: true,
            fitToSectionDelay: 1000, // 섹션 넘어갈 때 걸리는 딜레이 시간
            keyboardScrolling: true, // 키보드 방향키로 스크롤 컨트롤 여부
            animateAnchor: true,
            // sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'] // 섹션별 컬러
            /*
            afterRender: function () {
                setInterval(function () {
                    $.fn.fullpage.moveSlideRight();
                }, 5000);
            }
            */
        });

        //프리미엄7 슬라이드
        var swiper = new Swiper('.premium-slider', {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            effect: 'fade',
            autoplay: {
                delay:5000
            },
        });   
        
        $('.bxslider').bxSlider({
            auto: true,
            speed: 500,
            pause: 4000,
            mode:'fade',
            autoControls: true,
            pager:true,
            pagerCustom: '#bx-pager',

            onSliderLoad: function(currentIndex) {     
                $(".bxslider").children().eq(currentIndex + 1).addClass("active");
            },
            onSlideAfter: function($slideElement){
                $(".bxslider").children().removeClass("active");
                $slideElement.addClass("active");
            }
        });
    });

    $(window).resize(); 

</script>


    <!-- Javascript -->
    <script type="text/javascript">
        $(document).ready(function () {
            // 팝업창에 주어진 이름을 변수로 던져 저장된 쿠키가 있는지 확인         
            var popup1 = getCookie('popup1');
            var popup2 = getCookie('popup2');
            var popup3 = getCookie('popup3');
            var popup4 = getCookie('popup4');
            var popup5 = getCookie('popup5');

            // 변수가 없을경우 팝업 출력         
            if (!popup1) {
                popUpAction('popup1');
            }

            // 변수가 없을경우 팝업 출력 
            if (!popup2) { popUpAction('popup2'); }

            // 변수가 없을경우 팝업 출력 
            if (!popup3) { popUpAction('popup3'); }
            
            // 변수가 없을경우 팝업 출력 
            if (!popup4) { popUpAction('popup4'); }
            
            // 변수가 없을경우 팝업 출력 
            if (!popup5) { popUpAction('popup5'); }
        });

        // 쿠키 가져오기 

        function getCookie(name) {
            var nameOfCookie = name + "=";
            var x = 0; while (x <= document.cookie.length) {
                var y = (x + nameOfCookie.length);
                if (document.cookie.substring(x, y) == nameOfCookie) {
                    if ((endOfCookie = document.cookie.indexOf(";", y)) == -1)
                        endOfCookie = document.cookie.length;
                    return unescape(document.cookie.substring(y, endOfCookie));
                }
                x = document.cookie.indexOf(" ", x) + 1; if (x == 0)
                    break;
            }
            return "";
        }

        // 24시간 기준 쿠키 설정하기 
        // expiredays 후의 클릭한 시간까지 쿠키 설정 
        function setCookie24(name, value, expiredays) {
            var todayDate = new Date(); todayDate.setDate(todayDate.getDate() + expiredays);
            document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
        }

        // 00:00 시 기준 쿠키 설정하기 
        // expiredays 의 새벽 00:00:00 까지 쿠키 설정 
        function setCookie00(name, value, expiredays) {
            var todayDate = new Date();
            todayDate = new Date(parseInt(todayDate.getTime() / 86400000) * 86400000 + 54000000);
            if (todayDate > new Date()) {
                expiredays = expiredays - 1;
            }
            todayDate.setDate(todayDate.getDate() + expiredays);
            document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
        }

        // 팝업출력
        function popUpAction(name) {
            // name으로 해당 팝업창 열기 
            $("div[name=" + name + "]").fadeIn();
        }

        // 닫기버튼 클릭 이벤트 
        $('.btn_close').click(function () {
            $(this).parent('.popup').fadeOut();
            // 오늘하루 보지않기 체크 확인 
            if ($("input:checkbox[name=today_close1]").is(":checked") == true) {
                setCookie00('popup1', "done", 1);
            }

            // 오늘하루 보지않기 체크 확인
            if ($("input:checkbox[name=today_close2]").is(":checked") == true) {
                setCookie00('popup2', "done", 1);
            }

            // 오늘하루 보지않기 체크 확인 
            if ($("input:checkbox[name=today_close3]").is(":checked") == true) {
                setCookie00('popup3', "done", 1);
            }

            // 오늘하루 보지않기 체크 확인 
            if ($("input:checkbox[name=today_close4]").is(":checked") == true) {
                setCookie00('popup4', "done", 1);
            }

            // 오늘하루 보지않기 체크 확인 
            if ($("input:checkbox[name=today_close5]").is(":checked") == true) {
                setCookie00('popup5', "done", 1);
            }
            // name으로 해당 팝업창 닫기 
            $(this).parent("div[name=" + name + "]").fadeOut();
        });

    </script>