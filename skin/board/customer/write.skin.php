<!-- e: sub-visual subbg-1 -->
<div class="boxy-warp sub-contents">
	<div class="r-sub-con">
		<?php
		if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

		// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
		add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);

		// 전화번호
		$wr_1 = "$hp[0]-$hp[1]-$hp[2]";

		// 체크박스
		$check = explode(",", $write['wr_4']);

		//다음 주소 js
		add_javascript(G5_POSTCODE_JS, 0);
		// 주소입력
		$addr = explode('|', $write['wr_5']);
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
						$option .= "\n" . '<input type="checkbox" id="notice" name="notice" value="1" ' . $notice_checked . '>' . "\n" . '<label for="notice">공지</label>';
					}

					if ($is_html) {
						if ($is_dhtml_editor) {
							$option_hidden .= '<input type="hidden" value="html1" name="html">';
						} else {
							$option .= "\n" . '<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="' . $html_value . '" ' . $html_checked . '>' . "\n" . '<label for="html">HTML</label>';
						}
					}

					if ($is_secret) {
						if ($is_admin || $is_secret == 1) {
							$option .= "\n" . '<input type="checkbox" id="secret" name="secret" value="secret" ' . $secret_checked . '>' . "\n" . '<label for="secret">비밀글</label>';
						} else {
							$option_hidden .= '<input type="hidden" name="secret" value="secret">';
						}
					}

					if ($is_mail) {
						$option .= "\n" . '<input type="checkbox" id="mail" name="mail" value="mail" ' . $recv_email_checked . '>' . "\n" . '<label for="mail">답변메일받기</label>';
					}
				}

				echo $option_hidden;
				?>
				<div id="customer" class="moPd">
					<section class="personal">
						<h3>개인정보 수집 및 이용에 대한 안내</h3>
						<div class="scroll">
							<strong>1. 수집하는 개인정보 항목</strong>
							<p>당사는 고객님의 정보를 중요시하며, 개인정보보호법을 준수하고 있습니다. 수집된 개인정보는 분양 및 청약 관련 이벤트를 효율적으로 운영하기 위한 목적으로 활용되며 최소한의 범위 내에서 개인정보를 수집하고 있습니다.
								- 개인정보 수집항목 : 이름 , 휴대전화번호, 주소, 서비스 이용기록 , 접속 로그 , 쿠키 , 접속 IP 정보 등
								- 개인정보 수집 및 이용목적 : 분양정보 제공(전화, 문자)
								- 개인정보 수집방법 : 홈페이지(관심고객등록)
								또한, 귀하께서 본 홈페이지의 개인정보 수집/이용, 개인정보 처리위탁의 내용에 대해 각각 「동의함」버튼 또는 「동의하지 않음」버튼을 클릭할 수 있는 절차를 마련하여, 각각의 「동의함」버튼을 클릭하면 해당 사항</p>
							<strong>1. 수집하는 개인정보 항목</strong>
							<p>더테라스by레드우즈파크 홈페이지는 서비스 이용을 위해 필요한 최소한의 범위로 개인정보를 수집합니다.
								- 개인정보 수집항목 : 이름 , 휴대전화번호, 주소, 서비스 이용기록 , 접속 로그 , 쿠키 , 접속 IP 정보 등
								- 개인정보 수집 및 이용목적 : 분양정보 제공(전화, 문자)
								- 개인정보 수집방법 : 홈페이지(관심고객등록)
								또한, 귀하께서 본 홈페이지의 개인정보 수집/이용, 개인정보 처리위탁의 내용에 대해 각각 「동의함」버튼 또는 「동의하지 않음」버튼을 클릭할 수 있는 절차를 마련하여, 각각의 「동의함」버튼을 클릭하면 해당 사항</p>
							<strong>1. 수집하는 개인정보 항목</strong>
							<p>더테라스by레드우즈파크 홈페이지는 서비스 이용을 위해 필요한 최소한의 범위로 개인정보를 수집합니다.
								- 개인정보 수집항목 : 이름 , 휴대전화번호, 주소, 서비스 이용기록 , 접속 로그 , 쿠키 , 접속 IP 정보 등
								- 개인정보 수집 및 이용목적 : 분양정보 제공(전화, 문자)
								- 개인정보 수집방법 : 홈페이지(관심고객등록)
								또한, 귀하께서 본 홈페이지의 개인정보 수집/이용, 개인정보 처리위탁의 내용에 대해 각각 「동의함」버튼 또는 「동의하지 않음」버튼을 클릭할 수 있는 절차를 마련하여, 각각의 「동의함」버튼을 클릭하면 해당 사항</p>
						</div>
						<div class="check">
							<label for="wr_2"><input type="checkbox" name="wr_2" value="1" <?php echo ($write['wr_2'] == "1") ? " checked" : ""; ?> class="checkbox"><span class="label"></span> 동의합니다(동의하셔야 등록이 가능합니다.)</label>
						</div>
					</section>

					<section class="info mt80">
						<h3>'더테라스by레드우즈파크' 분양정보 제공에 관한 동의(선택사항)</h3>
						<div class="scroll">
							<ul>
								<li>해당 고객정보의 수집 및 이용은 '더테라스by레드우즈파크 홈페이지'의 분양정보 제공 목적 외 사용되지 않습니다.</li>
								<li>수집하는 개인정보 항목 : SMS/전화상담 수신여부</li>
								<li>수집 및 이용 목적 : 더테라스by레드우즈파크 홈페이지 분양정보 안내</li>
								<li>보유 및 이용기간 : 더테라스by레드우즈파크 홈페이지 분양종료 시 까지</li>
								<li>위 개인정보 수집 및 이용에 대해서 부동의하셔도 관심고객 등록은 가능하나 분양정보 제공에 제약이 있을 수 있습니다. (※ 부동의에 따른 고지사항)</li>
							</ul>
						</div>
						<div class="check">
							<!-- <label><input type="radio" name="wr_3" id="wr_3" value="동의"<?php echo ($write['wr_3'] == "동의") ? " checked" : ""; ?> class="radio" required><span class="label"></span>동의</label>
            <label><input type="radio" name="wr_3" id="wr_3" value="미동의"<?php echo ($write['wr_3'] == "미동의") ? " checked" : ""; ?> class="radio" checked="" required><span class="label"></span>미동의</label> -->
							<label for="wr_3"><input type="checkbox" name="wr_3" value="1" <?php echo ($write['wr_3'] == "1") ? " checked" : ""; ?> class="checkbox"><span class="label"></span> 동의합니다(동의하지 않을 경우 분양정보를 제공 받을 수 없습니다.)</label>
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
											<input id="sname" class="type-text" type="text" style="width:266px;" maxlength="10" name="wr_name" value="<?php echo $name ?>" id="wr_name" class="frm_input required" placeholder="이름" required>
										<?php } ?>
									</td>
								</tr>
								<tr>
									<th>연령대</span></th>
									<td>
										<label><input type="radio" name="wr_6" id="wr_6" value="20대" <?php echo ($write['wr_6'] == "20대") ? " checked" : ""; ?> class="radio" required><span class="label"></span>20대</label>
										<label><input type="radio" name="wr_6" id="wr_6" value="30대" <?php echo ($write['wr_6'] == "30대") ? " checked" : ""; ?> class="radio" required><span class="label"></span>30대</label>
										<label><input type="radio" name="wr_6" id="wr_6" value="40대" <?php echo ($write['wr_6'] == "40대") ? " checked" : ""; ?> class="radio" required><span class="label"></span>40대</label>
										<label><input type="radio" name="wr_6" id="wr_6" value="50대" <?php echo ($write['wr_6'] == "50대") ? " checked" : ""; ?> class="radio" required><span class="label"></span>50대</label>
										<label><input type="radio" name="wr_6" id="wr_6" value="60대이상" <?php echo ($write['wr_6'] == "60대이상") ? " checked" : ""; ?> class="radio" required><span class="label"></span>60대이상</label>
									</td>
								</tr>
								<tr>
									<th>성별</span></th>
									<td>
										<label><input type="radio" name="wr_7" id="wr_7" value="남성" <?php echo ($write['wr_7'] == "남성") ? " checked" : ""; ?> class="radio" required><span class="label"></span>남성</label>
										<label><input type="radio" name="wr_7" id="wr_7" value="여성" <?php echo ($write['wr_7'] == "여성") ? " checked" : ""; ?> class="radio" required><span class="label"></span>여성</label>
								</tr>
								<tr>
									<th>유입경로</span></th>
									<td>
										<label><input type="radio" name="wr_8" id="wr_8" value="블로그" <?php echo ($write['wr_8'] == "블로그") ? " checked" : ""; ?> class="radio" required><span class="label"></span>블로그</label>
										<label><input type="radio" name="wr_8" id="wr_8" value="인스타그램" <?php echo ($write['wr_8'] == "인스타그램") ? " checked" : ""; ?> class="radio" required><span class="label"></span>인스타그램</label>
										<label><input type="radio" name="wr_8" id="wr_8" value="지인추천" <?php echo ($write['wr_8'] == "지인추천") ? " checked" : ""; ?> class="radio" required><span class="label"></span>지인추천</label>
								</tr>
								</tr>
								<tr class="tel">
									<th>연락처</th>
									<td>
										<input type="text" name="hp[0]" value="<?php echo $hp[0] ?>" class="frm_input" size="10" maxlength="4" required> - <input type="text" name="hp[1]" value="<?php echo $hp[1] ?>" class="frm_input" size="10" maxlength="4" required> - <input type="text" name="hp[2]" value="<?php echo $hp[2] ?>" class="frm_input" size="10" maxlength="4" required>
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
											<input type="text" name="ex_zip" value="<?php echo $ex_zip; ?>" id="ex_zip" class="frm_input" size="6" maxlength="6" required>
											<button type="button" class="btn_frmline" onclick="win_zip('fwrite', 'ex_zip', 'ex_addr1', 'ex_addr2', 'ex_addr3', 'ex_jibeon');">주소 검색</button><br>
											<input type="text" name="ex_addr1" value="<?php echo $ex_addr1; ?>" id="ex_addr1" class="frm_input frm_address" size="50">
											<label for="ex_addr1">기본주소</label><br>
											<input type="text" name="ex_addr2" value="<?php echo $ex_addr2; ?>" id="ex_addr2" class="frm_input frm_address" size="50" required>

										</div>
									</td>
								</tr>
								<!-- <tr>
                    <th>관심주택형<span>(중복선택가능)</span></th>
                    <td>
                        <label><input type="checkbox" name="check[]" value="아파트"<?php echo in_array("아파트", $check) ? ' checked="checked"' : '' ?> class="checkbox"><span class="label"></span> 아파트</label>
                        <label><input type="checkbox" name="check[]" value="오피스텔"<?php echo in_array("오피스텔", $check) ? ' checked="checked"' : '' ?> class="checkbox"><span class="label"></span> 오피스텔</label>
                    </td>
                </tr> -->
							</tbody>
						</table>
					</section>
					<input type="submit" value="관심고객등록" id="btn_submit" accesskey="s" class="btn btn_register">

					<!-- <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel btn">취소</a> -->

				</div>
				<?php if ($is_category) { ?>
					<div class="bo_w_select write_div">
						<label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
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
							<?php if ($is_member) { // 임시 저장된 글 기능 
							?>
								<script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
								<?php if ($editor_content_js) echo $editor_content_js; ?>
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
							<?php if ($write_min || $write_max) { ?>
								<!-- 최소/최대 글자 수 사용 시 -->
								<p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
							<?php } ?>
							<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 
							?>
							<?php if ($write_min || $write_max) { ?>
								<!-- 최소/최대 글자 수 사용 시 -->
								<div id="char_count_wrap"><span id="char_count"></span>글자</div>
							<?php } ?>
						</div>

					</div>

					<!-- 				
				<?php for ($i = 1; $is_link && $i <= G5_LINK_COUNT; $i++) { ?>
				<div class="bo_w_link write_div">
						<label for="wr_link<?php echo $i ?>"><i class="xi-link"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
						<input type="text" name="wr_link<?php echo $i ?>" value="<?php if ($w == "u") {
																						echo $write['wr_link' . $i];
																					} ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
				</div>
				<?php } ?>

				<?php for ($i = 0; $is_file && $i < $file_count; $i++) { ?>
				<div class="bo_w_flie write_div">
						<div class="file_wr write_div">
								<label for="bf_file_<?php echo $i + 1 ?>" class="lb_icon"><i class="xi-file-add-o"></i><span class="sound_only"> 파일 #<?php echo $i + 1 ?></span></label>
								<input type="file" name="bf_file[]" id="bf_file_<?php echo $i + 1 ?>" title="파일첨부 <?php echo $i + 1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
						</div>
						<?php if ($is_file_content) { ?>
						<input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
						<?php } ?>

						<?php if ($w == 'u' && $file[$i]['file']) { ?>
						<span class="file_del">
								<input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'] . '(' . $file[$i]['size'] . ')';  ?> 파일 삭제</label>
						</span>
						<?php } ?>

				</div>
				<?php } ?> -->

					<!-- 자동등록방지 없애기
				<?php if ($is_use_captcha) { //자동등록방지  
				?>
				<div class="write_div">
						<?php echo $captcha_html ?>
				</div>
				<?php } ?>
				-->

			</form>

			<script>
				<?php if ($write_min || $write_max) { ?>
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

				function html_auto_br(obj) {
					if (obj.checked) {
						result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
						if (result)
							obj.value = "html2";
						else
							obj.value = "html1";
					} else
						obj.value = "";
				}

				function fwrite_submit(f) {


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
					$("input[name='check[]']").each(function() {
						if (this.checked) {
							flag = !flag;
							return false;
						}
					});

					// if (!flag) {
					// 	alert("관심주택형 종류는 하나 이상 체크해주세요.");
					// 	return false;
					// }


					<?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   
					?>

					var subject = "";
					var content = "";
					$.ajax({
						url: g5_bbs_url + "/ajax.filter.php",
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
						alert("제목에 금지단어('" + subject + "')가 포함되어있습니다");
						f.wr_subject.focus();
						return false;
					}

					if (content) {
						alert("내용에 금지단어('" + content + "')가 포함되어있습니다");
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
								alert("내용은 " + char_min + "글자 이상 쓰셔야 합니다.");
								return false;
							} else if (char_max > 0 && char_max < cnt) {
								alert("내용은 " + char_max + "글자 이하로 쓰셔야 합니다.");
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