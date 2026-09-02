<?php
include_once('../../../common.php');

$login_action_url = G5_HTTPS_BBS_URL."/login_check.php";

include_once('../../../head.sub.php');

add_stylesheet('<link rel="stylesheet" href="'.G5_URL.'/_publishing/member/member_01/style.css?ver='.G5_CSS_VER.'" />');
?>

<div id="" class="mem01_skin">
    <div class="inner">
        <h2 class="mem_title">인스크루에 오신것을 환영합니다.</h2>
        <div class="mb_log_cate">
            <h2 class="on">로그인</h2>
        </div>

        <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post" autocomplete="off">
            <input type="hidden" name="url" value="<?php echo $login_url ?>">
            <fieldset id="login_fs">
                <legend>회원로그인</legend>
                <label for="login_id" class="sound_only">회원아이디<strong class="sound_only"> 필수</strong></label>
                <input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="아이디">
                <label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
                <input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="비밀번호">

                <div id="login_info" class="check_box">
                    <input type="checkbox" name="auto_login" id="login_auto_login" class="select_chk">
                    <label for="login_auto_login" class="family_medium">로그인 상태 유지</label>
                </div>

                <button type="submit" class="btn_submit family_medium">로그인</button>
            </fieldset>
        </form>

        <div id="lost_password">
            <span>계정정보를 잊으셨습니까?</span>
            <a href="<?php echo G5_BBS_URL ?>/password_lost.php" class="family_medium" id="login_password_lost">계정정보찾기</a>
        </div>
    </div>
</div>

<script>
jQuery(function($){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>

<?php
include_once('../../../tail.sub.php');
?>