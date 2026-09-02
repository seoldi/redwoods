<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/latest.all.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

?>


<header id="header">
  <div class="bg">
  </div>

  <div id="hs1">
    <div class="d_container">
      <div id="d_gnb">
        <p class="home"><a href="/"><i class="material-symbols-rounded">home</i></a></p>
        <ul class="member">
          <? if($is_member) { ?>
               <li class="m1"><a href="/bbs/logout.php">로그아웃</a></li>
               <? if($is_admin) { ?>
               <li class="m2"><a href="/adm">관리자</a></li>
               <? }else{ ?>
               <li class="m3"><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>    <? } ?>
           <? }else{ ?>
              <!-- <li class="m2"><a href="/bbs/login.php" target="_blank">로그인</a></li> -->
              <li class="d1"><a href="/bbs/write.php?bo_table=customer"><i class="material-symbols-rounded">person</i>관심고객등록</a></li>
              <li class="d2"><a href="/bbs/search.php"><i class="material-symbols-rounded">search</i>통합검색</a></li>
           <? } ?>
        </ul>
        <div class="close">
          <span></span>
        </div>
      </div>
    </div>
  </div>


  <div id="hs2">
    <div class="d_container">
      <div id="d_lnb_btn">
        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
      </div>
      <h1 class="logo">
        <a href="/">
          <img src="<?php echo G5_THEME_IMG_URL ?>/logo.svg" alt="더테라스by레드우즈파크" class="pc_logo"/>
          <img src="<?php echo G5_THEME_IMG_URL ?>/logo.svg" alt="더테라스by레드우즈파크" class="m_logo"/>
        </a>
      </h1>
      <div id="d_lnb">
        <div id="d_lnb_bg">
          <div class="d_container">
          </div>
          <div class="shadow">
          </div>
        </div>
        <ul>
        <?php
          $sql = " select *
                from {$g5['menu_table']}
                where me_use = '1'
                  and length(me_code) = '2'
                order by me_order, me_id ";
          $result = sql_query($sql, false);
          $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
          $menu_datas = array();
          for ($i=0; $row=sql_fetch_array($result); $i++) {
            $menu_datas[$i] = $row;

            $sql2 = " select *
                  from {$g5['menu_table']}
                  where me_use = '1'
                    and length(me_code) = '4'
                    and substring(me_code, 1, 2) = '{$row['me_code']}'
                  order by me_order, me_id ";
            $result2 = sql_query($sql2);
            for ($k=0; $row2=sql_fetch_array($result2); $k++) {
              $menu_datas[$i]['sub'][$k] = $row2;
            }
          }
          $i = 0;
          foreach( $menu_datas as $row ){
            if( empty($row) ) continue;
        ?>
			<?php if($row['sub']['0']) { ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle en2 f16" href="<?php echo $row['me_link']; ?>" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
					<?php echo $row['me_name'] ?>
					</a>
						<!-- 서브 -->
						<div class="sub">
							<?php
							// 하위 분류
							$k = 0;
							foreach( (array) $row['sub'] as $row2 ){

							if( empty($row2) ) continue;

							?>
							<a class="dropdown-item ko1 f15 fw4" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a>

							<?php
							$k++;
							}   //end foreach $row2

							if($k > 0)
							echo '</div>'.PHP_EOL;
							?>
			<?php }else{?>
				<li class="nav-item">
				<a class="nav-link en2 f16" href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
				</li>
			<?php }?>
		</li>

		<?php
		$i++;
		}   //end foreach $row

		if ($i == 0) {  ?>
			<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
		<?php } ?>
          <!--li class="tail">
            <a href="../sub10/sub03_01.html"><span class="bar">사이트맵</span></a>
          </li-->
        </ul>
      </div>
        <div class="menu-last">
          <!-- <? if($is_member) { ?>
               <a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="material-symbols-outlined">settings</i><span>로그아웃</span></a>
               <? if($is_admin) { ?>
               <a href="/adm"><i class="material-symbols-outlined">settings</i><span>관리자</span></a>
               <? }else{ ?>
               <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="xi-user"></i><span>정보수정</span></a> 
           <? } ?>
           <? }else{ ?>
              <a href="<?php echo G5_BBS_URL ?>/register.php"><i class="material-symbols-outlined">settings</i></i><span>회원가입</span></a>
              <a href="<?php echo G5_BBS_URL ?>/login.php"><i class="material-symbols-outlined">settings</i><span>로그인</span></a>
           <? } ?>
          <a href="/bbs/search.php"><i class="material-symbols-outlined">search</i><span>검색</span></a> -->
          <span class="call"><i class="material-symbols-rounded">call</i>02-565-1676<span>
        </div>
    </div>
    <div id="d_lnb_mask">
    </div>
  </div>
</header>

<div id="quick">
  <div class="top">
    <!--
    <p class="open">9월 OPEN</p>
    <hr> -->
    <p class="customer">관심고객등록</p>
    <a href="/bbs/write.php?bo_table=customer"><i class="material-symbols-rounded">add</i></a>
  </div>
  <a href="#" class="btTop"><img src="<?php echo G5_THEME_IMG_URL ?>/bt_top.svg" alt="Top"></a>
</div>

<script>
$(function() {
    $(".btTop").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        $.fn.fullpage.moveTo(1, 1); // 이동하고싶은 페이지
        return false;
    });
});
</script>

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

<? if(defined('_INDEX_')) { ?>

<? }else{ ?>
  <?php include_once(G5_THEME_PATH.'/sub/top.php');	?>
<? } ?>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<!--내용관리 php 구문 삽입-->
<?php include_once(G5_THEME_PATH.'/sub.php');	?>