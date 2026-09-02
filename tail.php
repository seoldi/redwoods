<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<? if(defined('_INDEX_')) { ?>
<? }else{ ?>
</div><!-- end .sub_con -->
</section> <!-- End #sub -->
<? } ?>


<!-- 하단 시작 { -->
<div id="ft">
    <div class="copyright container">
        <!-- <div class="info">
            <p>분양문의 <strong>02-565-1676</strong></p>
            <p>지하3층 지상20층 총640호실</p>
        </div> -->
        <div class="address">
            <div class="left">
                <p>홍보관 : 강원특별자치도 원주시 서원대로 442 (단구동997)</p>
                <p>사업지 : 강원특별자치도 원주시 반곡동 2042 </p>
               
                <p class="txt-dark">※ 상기 이미지 및 일러스트 등은 소비자의 이해를 돕기 위해 합성 또는 제작된 것으로 인·허가 과정 및 실 시공 과정에서 변경될 수 있습니다.<br>
※ 본 홈페이지는 소비자의 이해를 돕기 위해 사전홍보용으로 제작된 것으로 실제와 다를 수 있으니 견본주택 및 현장을 방문하시어 직접 확인하시기 바랍니다.</p>
            </div>
            <div class="right">
                <p><span class="txt-dark">시행</span><img src="<?php echo G5_THEME_IMG_URL ?>/footer_1.svg" alt="뿌리깊은나무들(주)"></p>
                <p><span class="txt-dark">신탁</span><img src="<?php echo G5_THEME_IMG_URL ?>/footer_2.svg" alt="신한자산신탁"></p>
                <p><span class="txt-dark">시공</span><img src="<?php echo G5_THEME_IMG_URL ?>/footer_3.svg" alt="(주)태왕E&C"></p>
            </div>
        </div>
    </div>
    <!-- <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script> -->
</div>


<script>
	$(document).ready(function() {
		try {
		  $('#nav').onePageNav({
			begin: function() {
			  console.log('start')
			},
			end: function() {
			  console.log('stop')
			}
		  });
		} catch(e){}

	  $('map').imageMapResize();

    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animate__animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
      }
    );
    wow.init();
	});
	</script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
  $(function() {
      // 폰트 리사이즈 쿠키있으면 실행
      font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
  });

  AOS.init(); // 자바스크립트로 init()을 해야 동작한다.
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
// include_once(G5_LIB_PATH.'/outlogin.modal.lib.php');
?>