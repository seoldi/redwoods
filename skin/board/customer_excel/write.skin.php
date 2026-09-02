<!-- e: sub-visual subbg-1 -->
<div class="boxy-warp sub-contents">
	<div class="r-sub-con">
		<?php
		if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

		// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
		add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

		// 전화번호
		$wr_1 = "$hp[0]-$hp[1]-$hp[2]";

		// 체크박스
		$check = explode(",", $write['wr_4']);

		//다음 주소 js
		add_javascript(G5_POSTCODE_JS, 0); 
		// 주소입력
		$addr = explode('|',$write['wr_5']);
		$ex_zip  = $addr[0];
		$ex_addr1  = $addr[1];
		$ex_addr2  = $addr[2];
		$ex_addr3  = $addr[3];
		$ex_jibeon  = $addr[4];

		?>

		<section id="bo_w">
				<!-- <h2 class="sound_only"><?php echo $g5['title'] ?></h2> -->

				<!-- 게시물 작성/수정 시작 { -->
				<form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
				<input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
				<input type="hidden" name="w" value="<?php echo $w ?>">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
				<input type="hidden" name="stx" value="<?php echo $stx ?>">
				<input type="hidden" name="spt" value="<?php echo $spt ?>">
				<input type="hidden" name="sst" value="<?php echo $sst ?>">
				<input type="hidden" name="sod" value="<?php echo $sod ?>">
				<input type="hidden" name="page" value="<?php echo $page ?>">
				<?php
				$option = '';
				$option_hidden = '';
				if ($is_notice || $is_html || $is_secret || $is_mail) {
						$option = '';
						if ($is_notice) {
								$option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
						}

						if ($is_html) {
								if ($is_dhtml_editor) {
										$option_hidden .= '<input type="hidden" value="html1" name="html">';
								} else {
										$option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">HTML</label>';
								}
						}

						if ($is_secret) {
								if ($is_admin || $is_secret==1) {
										$option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
								} else {
										$option_hidden .= '<input type="hidden" name="secret" value="secret">';
								}
						}

						if ($is_mail) {
								$option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
						}
				}

				echo $option_hidden;
				?>
<div id="customer" class="moPd">
    <section class="personal">
        <h3>개인정보 수집 및 이용에 대한 안내</h3>
        <div class="scroll">
            <strong>1. 수집하는 개인정보의 항목</strong>
            <p>서면 경남아너스빌 엔테로까사 홈페이지는 서비스 이용을 위해 필요한 최소한의 범위로 개인정보를 수집합니다.<br>
            - 개인정보 수집항목 : 이름, 휴대전화,주소<br>
            - 개인정보 수집 및 이용목적 : 분양정보 제공(전화, 문자)<br>
            - 개인정보 수집방법 : 홈페이지(관심고객등록)</p>
            <strong>2. 개인정보의 수집 및 이용목적</strong>
            <p>회사는 개인정보를 다음의 목적을 위해 수집하며 다음의 목적이외의 용도로 사용되지 않습니다. 이용 목적이 변경되는 경우에는 개인정보보호법 제18조에 따라 필요한 조치를 이행할 예정입니다.<br>
				- 회원가입, 상담, 서비스 신청, 분양계약 관리, 입주관리, A/S관리, 마케팅 활용​​</p>
            <strong>3. 개인정보의 보유 및 이용기간</strong>
            <p>보유 및 이용기간 : 프로젝트 종료 또는 개인정보 수집 및 이용목적 달성시까지<br>
				- 파기절차 : 별도 DB 이관 후 일정 기간 저장 후 파기<br>
				- 파기방법 : 종이 출력 정보 <br>
				- 분쇄 또는 소각, 전자 파일 정보 <br>
				- 재생 불가능한 기술 방법 사용</p>
            <strong>4. 개인정보 수집 동의 거부권</strong>
            <p>모든 고객은 동의를 거부할 수 있으며, 동의를 거부할 경우 관심고객으로 등록이 불가합니다.</p>
        </div>
        <div class="check">
			<label for="wr_2"><input type="checkbox" name="wr_2" value="1"<?php echo ($write['wr_2'] == "1") ? " checked" : "";?> class="checkbox"><span class="label"></span> 동의합니다.</label>
        </div>
    </section>

    <section class="info mt80">
        <h3>개인정보 취급 위탁동의</h3>
        <table>
            <colgroup>
                <col width="50%">
                <col width="50%">
            </colgroup>
            <thead>
                <tr>
                    <th>개인정보 취급을 받는자(수탁자)</th>
                    <th>개인정보 취급 위탁을 하는 업무의 내용</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>㈜엘오케이디앤씨</td>
                    <td>시행</td>
                </tr>
                <tr>
                    <td>㈜은성지앤비 / ㈜아이두디앤씨</td>
                    <td>분양마케팅 업무대행(안내,상담,기타 서비스 등)</td>
                </tr>
                <tr>
                    <td>㈜정권기획</td>
                    <td>분양 홈페이지 관리, 운영</td>
                </tr>
            </tbody>
        </table>
        <div class="check">
            <!-- <label><input type="radio" name="wr_3" id="wr_3" value="동의"<?php echo ($write['wr_3'] == "동의") ? " checked" : "";?> class="radio" required><span class="label"></span>동의</label>
            <label><input type="radio" name="wr_3" id="wr_3" value="미동의"<?php echo ($write['wr_3'] == "미동의") ? " checked" : "";?> class="radio" checked="" required><span class="label"></span>미동의</label> -->
			<label for="wr_3"><input type="checkbox" name="wr_3" value="1"<?php echo ($write['wr_3'] == "1") ? " checked" : "";?> class="checkbox"><span class="label"></span> 동의합니다.</label>
        </div>
    </section>

    <section class="write mt80">
        <h3>개인정보 취급 위탁동의</h3>
        <table class="writeTable">
            <colgroup>
                <col width="20%">
                <col width="80%">
            </colgroup>
            <tbody>
                <tr class="name">
                    <th>성명</th>
                    <td>
						<?php if ($is_name) { ?>
							<input id="sname" class="type-text" type="text" style="width:266px;" maxlength="10" name="wr_name" value="<?php echo $name ?>" id="wr_name" class="frm_input required" placeholder="이름" required >
						<?php } ?>
					</td>
                </tr>
                <tr class="tel">
                    <th>연락처</th>
                    <td>
						<input type="text" name="hp[0]" value="<?php echo $hp[0] ?>" class="frm_input" size="10" maxlength="4" equired> - <input type="text" name="hp[1]" value="<?php echo $hp[1] ?>" class="frm_input" size="10" maxlength="4" equired> - <input type="text" name="hp[2]" value="<?php echo $hp[2] ?>" class="frm_input" size="10" maxlength="4" equired>
                    </td>
                </tr>
                <tr class="adr">
                    <th>거주지</th>
                    <td>
                        <!-- <span class="select-wrapper">
                            <select name="hADDR1" id="hADDR1" style="width:200px;">
                                <option value="">시/도</option>
                                <option value="서울특별시">서울특별시</option>
                                <option value="경기도">경기도</option>
                                <option value="강원도">강원도</option>
                                <option value="경상남도">경상남도</option>
                                <option value="경상북도">경상북도</option>
                                <option value="광주광역시">광주광역시</option>
                                <option value="대구광역시">대구광역시</option>
                                <option value="대전광역시">대전광역시</option>
                                <option value="부산광역시">부산광역시</option>
                                <option value="울산광역시">울산광역시</option>
                                <option value="인천광역시">인천광역시</option>
                                <option value="세종특별자치시">세종특별자치시</option>
                                <option value="전라남도">전라남도</option>
                                <option value="전라북도">전라북도</option>
                                <option value="제주특별자치도">제주특별자치도</option>
                                <option value="충청남도">충청남도</option>
                                <option value="충청북도">충청북도</option>
                            </select>
                        </span>
                        <span class="select-wrapper">
                            <select name="hADDR2" id="hADDR2" style="width:200px;">
                                <option value="">구/군</option>
                            </select>
                        </span>
                        <span class="select-wrapper">
                            <select name="hADDR3" id="hADDR3" style="width:200px;">
                                <option value="">읍/면/동</option>
                            </select>
                        </span>
                        <span id="sidoMsg" style="color:#f00; display:none; font-size:12px;">※ [세종특별자치시]일 경우 구/군 데이터는 존재하지 않습니다.</span> -->

						<div class="write_div">
							<label for="ex_zip" class="sound_only">우편번호</label>
							<input type="text" name="ex_zip" value="<?php echo $ex_zip; ?>" id="ex_zip"  class="frm_input" size="6" maxlength="6">
							<button type="button" class="btn_frmline" onclick="win_zip('fwrite', 'ex_zip', 'ex_addr1', 'ex_addr2', 'ex_addr3', 'ex_jibeon');">주소 검색</button><br>
							<input type="text" name="ex_addr1" value="<?php echo $ex_addr1; ?>" id="ex_addr1" class="frm_input frm_address" size="50">
							<label for="ex_addr1">기본주소</label><br>
							<input type="text" name="ex_addr2" value="<?php echo $ex_addr2; ?>" id="ex_addr2" class="frm_input frm_address" size="50">
							<label for="ex_addr2">상세주소</label><br>
							<input type="text" name="ex_addr3" value="<?php echo $ex_addr3; ?>" id="ex_addr3" class="frm_input frm_address" size="50" readonly="readonly">
							<label for="ex_addr3">참고항목</label>
							<input type="hidden" name="ex_jibeon" value="<?php echo $ex_jibeon; ?>">
						</div>
                    </td>
                </tr>
                <tr>
                    <th>관심주택형<span>(중복선택가능)</span></th>
                    <td>
                        <label><input type="checkbox" name="check[]" value="아파트"<?php echo in_array("아파트", $check) ? ' checked="checked"' : '' ?> class="checkbox"><span class="label"></span> 아파트</label>
                        <label><input type="checkbox" name="check[]" value="오피스텔"<?php echo in_array("오피스텔", $check) ? ' checked="checked"' : '' ?> class="checkbox"><span class="label"></span> 오피스텔</label>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <input type="submit" value="관심고객등록" id="btn_submit" accesskey="s" class="btn btn_register">

							<!-- <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel btn">취소</a> -->
						
</div>
				<?php if ($is_category) { ?>
				<div class="bo_w_select write_div">
						<label for="ca_name"  class="sound_only">분류<strong>필수</strong></label>
						<select name="ca_name" id="ca_name" required>
								<option value="">분류를 선택하세요</option>
								<?php echo $category_option ?>
						</select>
				</div>
				<?php } ?>

				<div class="">


				<!-- 비밀번호 숨기기
					<?php if ($is_password) { ?>
						<label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
						<input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" placeholder="비밀번호">
				<?php } ?> -->
				<!-- 옵션 숨기기 				
				<?php if ($option) { ?>
				<div class="option-box">
						<span class="sound_only">옵션</span>
						<?php echo $option ?>
				</div>
				<?php } ?> -->

				<div class="bo_w_tit write_div">
						<!-- <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label> -->

						<div id="autosave_wrapper write_div">
								<input type="text" name="wr_subject" value="<?php echo $subject ?>님이 관심등록하였습니다." id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="제목" hidden>
								<?php if ($is_member) { // 임시 저장된 글 기능 ?>
								<script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
								<?php if($editor_content_js) echo $editor_content_js; ?>
								<!-- <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button> -->
								<div id="autosave_pop">
										<strong>임시 저장된 글 목록</strong>
										<ul></ul>
										<div><button type="button" class="autosave_close">닫기</button></div>
								</div>
								<?php } ?>
						</div>

				</div>

				<div class="write_div" style="display:none">
						<!-- <label for="wr_content" class="sound_only">내용<strong>필수</strong></label> -->
						<div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
								<?php if($write_min || $write_max) { ?>
								<!-- 최소/최대 글자 수 사용 시 -->
								<p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
								<?php } ?>
								<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
								<?php if($write_min || $write_max) { ?>
								<!-- 최소/최대 글자 수 사용 시 -->
								<div id="char_count_wrap"><span id="char_count"></span>글자</div>
								<?php } ?>
						</div>

				</div>

				<!-- 				
				<?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
				<div class="bo_w_link write_div">
						<label for="wr_link<?php echo $i ?>"><i class="xi-link"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
						<input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo $write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
				</div>
				<?php } ?>

				<?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
				<div class="bo_w_flie write_div">
						<div class="file_wr write_div">
								<label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="xi-file-add-o"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
								<input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
						</div>
						<?php if ($is_file_content) { ?>
						<input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
						<?php } ?>

						<?php if($w == 'u' && $file[$i]['file']) { ?>
						<span class="file_del">
								<input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
						</span>
						<?php } ?>

				</div>
				<?php } ?> -->

				<!-- 자동등록방지 없애기
				<?php if ($is_use_captcha) { //자동등록방지  ?>
				<div class="write_div">
						<?php echo $captcha_html ?>
				</div>
				<?php } ?>
				-->
				
				</form>

				<script>
				<?php if($write_min || $write_max) { ?>
				// 글자수 제한
				var char_min = parseInt(<?php echo $write_min; ?>); // 최소
				var char_max = parseInt(<?php echo $write_max; ?>); // 최대
				check_byte("wr_content", "char_count");

				$(function() {
						$("#wr_content").on("keyup", function() {
								check_byte("wr_content", "char_count");
						});
				});

				<?php } ?>
				function html_auto_br(obj)
				{
						if (obj.checked) {
								result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
								if (result)
										obj.value = "html2";
								else
										obj.value = "html1";
						}
						else
								obj.value = "";
				}

				function fwrite_submit(f)
				{


					if (!f.wr_2.checked) {
						alert("개인정보수집이용에 동의하셔야 작성할 수 있습니다.");
						f.wr_2.focus();
						return false;
					}

					if (!f.wr_3.checked) {
						alert("개인정보 취급 위탁동의 하셔야 작성할 수 있습니다.");
						f.wr_3.focus();
						return false;
					}

					var flag = false;
					$("input[name='check[]']").each( function () {
						if (this.checked) {
							flag = !flag; 
							return false;
						}
					});

					if (!flag) {
						alert("관심주택형 종류는 하나 이상 체크해주세요.");
						return false;
					}


						<?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

						var subject = "";
						var content = "";
						$.ajax({
								url: g5_bbs_url+"/ajax.filter.php",
								type: "POST",
								data: {
										"subject": f.wr_subject.value,
										"content": f.wr_content.value
								},
								dataType: "json",
								async: false,
								cache: false,
								success: function(data, textStatus) {
										subject = data.subject;
										content = data.content;
								}
						});

						if (subject) {
								alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
								f.wr_subject.focus();
								return false;
						}

						if (content) {
								alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
								if (typeof(ed_wr_content) != "undefined")
										ed_wr_content.returnFalse();
								else
										f.wr_content.focus();
								return false;
						}

						if (document.getElementById("char_count")) {
								if (char_min > 0 || char_max > 0) {
										var cnt = parseInt(check_byte("wr_content", "char_count"));
										if (char_min > 0 && char_min > cnt) {
												alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
												return false;
										}
										else if (char_max > 0 && char_max < cnt) {
												alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
												return false;
										}
								}
						}



						document.getElementById("btn_submit").disabled = "disabled";

						return true;
				}
				</script>
		</section>
		<!-- } 게시물 작성/수정 끝 -->
	</div>
</div>

