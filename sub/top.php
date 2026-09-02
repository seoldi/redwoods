<?php
    $folder =  basename(dirname(  $_SERVER["SCRIPT_FILENAME"] ));
    $title  = "당신이 꿈꿨던 원주의 일상이 펼쳐집니다";
    switch( $_GET["co_id"] ) {
        case "overview" : case "brand" : case "map" :
                $title  = "설레임 가득한 하루하루 당신이 꿈꿨던 원주의 일상이 펼쳐집니다";
                break;

        case "location" : case "premium" : case "community" :
                $title  = "선택 받은 당신께 주어지는 놀라운 삶";
                break;

        case "placement" : case "plane" : case "interior" : case "option" : case "emodel" :
                $title  = "특별함이 일상이 되는 원주 더테라스by레드우즈파크 ";
                break;

        case "special" : case "general" : case "apply" : case "winner" : case "video" :
                $title  = "미래를 만드는 끊임없는 혁신";
                break;
    }
?>

<section id="sub">

<div class="m_subMenu sub-menu" style="display:none;">
    <a href="/bbs/content.php?co_id=complex">단지소개</a>
    <!-- <a href="/bbs/content.php?co_id=community">커뮤니티센터</a> -->
    <a href="/bbs/content.php?co_id=layout">동호수배치도</a>
    <a href="/bbs/content.php?co_id=plane">UNIT</a>
    <a href="/bbs/content.php?co_id=emodel">e-모델하우스</a>
    <a href="/bbs/content.php?co_id=brochure">e-브로슈어</a>
    <a href="/bbs/content.php?co_id=guide_2">모집공고</a>
    <a href="/bbs/content.php?co_id=premium">프리미엄</a>
    <!-- <a href="/bbs/board.php?bo_table=news">언론보도</a> -->
    <a href="/bbs/content.php?co_id=video">홍보영상</a>
    <!-- <a href="/bbs/content.php?co_id=map">현장오시는길</a> -->
    <a href="/bbs/write.php?bo_table=customer">관심고객등록</a>
</div>
<div id="sub_visual" class="sub01">
    <div class="inner">
        <!-- <span>SEOMYUN HONORSVILLE</span> -->
        <h2>
            <?
                if($bo_table)
                {  //게시판에 들어 갔을 경우
                if($board[bo_subject]!='') { // 게시판 이름 출력
                echo "<a href='$g5[path]/$board[bo_table]'>$board[bo_subject]</a>";}
                if ($sca) {
                echo "$sca";     } // 카테고리 이름 출력
                    } else {
                echo "$g5[title]"; } //일반페이지에 접속했을 경우
                //echo " > ";
                //echo cut_str($write[wr_subject], 25);  // 게시물 제목 출력, 현재는 미표시, #제거하면 표시
            ?>
        </h2>
        <p><?php echo $title; ?></p>
    </div>
</div>

<div class="subMenu sub-menu">
    <?php $lMenu = get_middle_navi(); ?>
    <?php
    if($lMenu['cnt']) {
    ?>
        <?php
        for($i=0; $i<$lMenu['cnt']; $i++) {
            $lm = $lMenu[$i];
        ?>
        <a href="<?php echo($lm['me_link']);?>"><?php echo($lm['me_name']);?></a>
        <?php } ?>
    <?php } ?>
</div>

<script>
    $('.subMenu a').on('click', function(){
    //메뉴 중에 하나를 클릭하면
    $('.subMenu a').removeClass('active'); // 전체 on 삭제
    $(this).parent().addClass('active'); // 선택된 부모 li에게 on 부여
    
    var left = $('.subMenu a.active').offset().left;
    //on이 부여된 li 의 위치 (스크롤된 상태 기준으로 계산됨)
    var curLeft = $('.subMenu').scrollLeft();
    //현재 스크롤 위치
    
    $('.subMenu').animate({scrollLeft : curLeft+left}, 400);
    //400ms 동안 scrollLeft의 위치를 (curLeft + left) 로 변경함 
    });

    // 현재 페이지의 URL을 가져옵니다
    var currentUrl = window.location.href;

    // 각 링크 요소에 대해 반복합니다
    $(".sub-menu a").each(function () {
        // 현재 반복 중인 링크 요소의 href 속성 값을 가져옵니다
        var linkUrl = $(this).attr("href");

        // 현재 페이지의 URL과 링크의 URL을 비교하여 일치하는지 확인합니다
        if (currentUrl.indexOf(linkUrl) !== -1) {
            // 만약 일치한다면 해당 링크 요소에 .active 클래스를 추가합니다
            $(this).addClass("active");
        }
    });
</script>

<? if($co_id=="welcome" || $co_id=="organization" || $co_id=="member" || $co_id=="history" || $co_id=="football" || $co_id=="location" ) {?>

<?}?>

<div class="sub_con container">
