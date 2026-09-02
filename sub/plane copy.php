<?php include_once(G5_THEME_PATH.'/sub/plane_info.php');	?>
<style>.subTl {display: none;}</style>
<div id="plane">
  <section class="head center">
    <h2>다양한 라이프스타일에 맞춘 10개타입의 차별화된 공간</h2>
    <p>640호실의 최첨단 AI오피스텔의 품격
      머무는 순간 특별한 작품이 되는 시그니처 라이프</p>
  </section>

 <div class="tab">
    <div class="tabnav wrap">
      <a href="#A" data-id="A"><b>A</b>24.42㎡</a>
      <a href="#B" data-id="B"><b>B</b>26.46㎡</a>
      <a href="#C" data-id="C"><b>C</b>55.68㎡</a>
      <a href="#D" data-id="D"><b>D</b>49.29㎡</a>
      <a href="#E" data-id="E"><b>E</b>59.98㎡</a>
      <a href="#F" data-id="F"><b>F</b>59.90㎡</a>
      <a href="#G" data-id="G"><b>G</b>59.54㎡</a>
      <a href="#H" data-id="H"><b>H</b>59.98㎡</a>
      <a href="#I" data-id="I"><b>I</b>59.90㎡</a>
      <a href="#J" data-id="J"><b>J</b>59.54㎡</a>
    </div>

    <div class="tabcontent">
      <div id="A" class="tab-pane">
        <div class="info">
            <div class="left">
                <div class="bigTl">
                    <h3><bold id="dynamicType"></bold></h3>
                    <hr>
                    <p><span id="dynamicRoom"></span></p>
                </div>
                <div class="list">
                    <div class="item">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/unit_1.svg">
                        <p class="tl">전용면적</p>
                        <p class="num" id="area"></p>
                    </div>
                    <div class="item">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/unit_2.svg">
                        <p class="tl">공용면적</p>
                        <p class="num" id="contractArea"></p>
                    </div>
                    <div class="item">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/unit_6.svg">
                        <p class="tl">공급면적</p>
                        <p class="num" id="supplyArea"></p>
                    </div>
                    <div class="item">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/unit_3.svg">
                        <p class="tl">기타공용면적</p>
                        <p class="num" id="otherArea"></p>
                    </div>
                    <div class="item">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/unit_7.svg">
                        <p class="tl">주차장면적</p>
                        <p class="num" id="parkingArea"></p>
                    </div>
                    <div class="item">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/unit_4.svg">
                        <p class="tl">계약면적</p>
                        <p class="num" id="totalArea"></p>
                    </div>
                    <div class="item">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/unit_5.svg">
                        <p class="tl">서비스면적</p>
                        <p class="num" id="serviceArea"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="iso">
            <p class="phrase">
              <span id="phraseTxt1">원하는 공간을 자유롭게</span>
              <span id="phraseTxt2">선택형 맞춤 특화설계</span>
            </p>
            <div class="box"><img id="isoImage" src="" alt="ISO 이미지"></div>
        </div>

        <div class="option">
          <h4 class="subTitle">옵션형</h4>
          <div class="box">
            <div class="item">
               <h5 id="boxTl"></h5>
               <img id="optionImage" src="" alt="옵션형 이미지">
            </div>
            <!-- <div class="item add">
               <h5 id="boxTl"></h5>
               <img id="optionImage2" src="" alt="옵션형 이미지">
            </div> -->
          </div>
        </div>

        <div class="floor">
          <h4 class="subTitle">기본형</h4>
          <div class="box">
            <div class="item">
               <h5 id="boxTl"></h5>
               <img id="floorImage" src="" alt="기본형 이미지">
            </div>
            <!-- <div class="item add">
               <h5 id="boxTl"></h5>
               <img id="floorImage2" src="" alt="기본형 이미지">
            </div> -->
          </div>
        </div>
      </div>
      <div id="B" class="tab-pane"></div>
      <div id="C" class="tab-pane"></div>
      <div id="D" class="tab-pane"></div>
      <div id="E" class="tab-pane"></div>
      <div id="F" class="tab-pane"></div>
      <div id="G" class="tab-pane"></div>
      <div id="H" class="tab-pane"></div>
      <div id="I" class="tab-pane"></div>
      <div id="J" class="tab-pane"></div>
    </div>
      <div class="explain">
        ※ 상기 평면도는 소비자의 개략적인 이해를 돕기 위한 것으로 평면, 면적, 마감재는 실제 공사 시 다소 변경될 수 있습니다.
        ※ 일부 세대는 대칭형으로 시공되며, 호수별 조망과 일조 차이가 상이하오니, 계약 시 필히 확인하시기 바랍니다.
        ※ 상기 평면도, 이미지 등은 소비자의 이해를 돕기 위한 것으로 실제와 차이가 날 수 있으므로 반드시 홍보관에서 확인하시기 바랍니다.
      </div>
  </div>
</div>

    <script>
        // 탭 콘텐츠 데이터 (예시)
        const data = {
            A: {
                type: "A",
                room: "32",
                area: "24.42",
                contractArea: "12.82",
                supplyArea: "37.25",
                otherArea: "1.98",
                parkingArea: "14.30",
                totalArea: "53.53",
                serviceArea: "4.30",
                phraseTxt1: "원하는 공간을 자유롭게",
                phraseTxt2: "선택형 맞춤 특화설계",
                isoImage: "A_iso.png",
                optionImage: "A_option.png",
                floorImage: "A_floor.png"
            },
            B: {
                type: "B",
                room: "112",
                area: "26.46",
                contractArea: "13.73",
                supplyArea: "40.20",
                otherArea: "2.14",
                parkingArea: "15.43",
                totalArea: "57.78",
                serviceArea: "4.12",
                phraseTxt1: "심플함 속에 빛나는",
                phraseTxt2: "감각적인 공간미학",
                isoImage: "B_iso.png",
                optionImage: "B_option.png",
                floorImage: "B_floor.png"
            },
            C: {
                type: "C",
                room: "16",
                area: "55.68",
                contractArea: "29.66",
                supplyArea: "85.34",
                otherArea: "4.55",
                parkingArea: "32.77",
                totalArea: "122.66",
                serviceArea: "11.51",
                phraseTxt1: "개방감 및 전망과 채광등",
                phraseTxt2: "통풍성이 우수한 혁신평면",
                isoImage: "C_iso.png",
                optionImage: "C_option.png",
                floorImage: "C_floor.png"
            },
            D: {
                type: "D",
                room: "448",
                area: "49.29",
                contractArea: "23.95",
                supplyArea: "73.25",
                otherArea: "3.90",
                parkingArea: "28.12",
                totalArea: "105.28",
                serviceArea: "9.67",
                phraseTxt1: "센스넘치는 공간의 아름다움",
                phraseTxt2: "효율성과 편의성이 돋보이는 공간구성",
                isoImage: "D_iso.png",
                optionImage: "D_option.png",
                floorImage: "D_floor.png"
            },
            E: {
                type: "E",
                room: "2",
                area: "59.98",
                contractArea: "29.60",
                supplyArea: "89.59",
                otherArea: "4.77",
                parkingArea: "34.40",
                totalArea: "128.76",
                serviceArea: "6.60",
                phraseTxt1: "합리적인 공간설계로",
                phraseTxt2: "편안하고 효율적인 동선",
                isoImage: "E_iso.png",
                optionImage: "E_option.png",
                floorImage: "E_floor.png"
            },
            F: {
                type: "F",
                room: "1",
                area: "59.90",
                contractArea: "31.31",
                supplyArea: "91.22",
                otherArea: "4.86",
                parkingArea: "35.02",
                totalArea: "131.10",
                serviceArea: "6.49",
                phraseTxt1: "간결함과 세련미",
                phraseTxt2: "실용성까지 겸비한 공간연출",
                isoImage: "F_iso.png",
                optionImage: "F_option.png",
                floorImage: "F_floor.png"
            },
            G: {
                type: "G",
                room: "13",
                area: "59.54",
                contractArea: "28.84",
                supplyArea: "88.39",
                otherArea: "4.71",
                parkingArea: "33.94",
                totalArea: "127.03",
                serviceArea: "5.36",
                phraseTxt1: "차원이 다른 공간설계와",
                phraseTxt2: "모던한 디자인의 혁신평면",
                isoImage: "G_iso.png",
                optionImage: "G_option.png",
                floorImage: "G_floor.png"
            },
            H: {
                type: "H",
                room: "2",
                area: "59.98",
                contractArea: "29.60",
                supplyArea: "89.59",
                otherArea: "4.77",
                parkingArea: "34.40",
                totalArea: "128.76",
                serviceArea: "4.60",
                phraseTxt1: "공간을 보다 넓게 활용할 수 있는",
                phraseTxt2: "콤팩트한 공간디자인",
                isoImage: "H_iso.png",
                optionImage: "H_option.png",
                floorImage: "H_floor.png"
            },
            I: {
                type: "I",
                room: "1",
                area: "59.90",
                contractArea: "31.31",
                supplyArea: "91.22",
                otherArea: "4.86",
                parkingArea: "35.02",
                totalArea: "131.10",
                serviceArea: "6.49",
                phraseTxt1: "볼드한 마감재 모던한 디자인 차분하면서",
                phraseTxt2: "고급스러운 분위기의 디자인연출",
                isoImage: "I_iso.png",
                optionImage: "I_option.png",
                floorImage: "I_floor.png"
            },
            J: {
                type: "J",
                room: "13",
                area: "59.54",
                contractArea: "28.84",
                supplyArea: "88.39",
                otherArea: "4.71",
                parkingArea: "33.94",
                totalArea: "127.03",
                serviceArea: "5.36",
                phraseTxt1: "원목마루와 화사한 빛을 담은 마감재들의 어울림",
                phraseTxt2: "아늑하고 따뜻한 분위기의 단아한 디자인",
                isoImage: "J_iso.png",
                optionImage: "J_option.png",
                floorImage: "J_floor.png"
            }

        };

        // 탭 클릭 시 콘텐츠 업데이트
        function updateContent(id) {
            const content = data[id];
            if (content) {
                document.getElementById('dynamicType').innerText = content.type;
                document.getElementById('dynamicRoom').innerText = content.room;
                document.getElementById('area').innerText = content.area;
                document.getElementById('contractArea').innerText = content.contractArea;
                document.getElementById('supplyArea').innerText = content.supplyArea;
                document.getElementById('otherArea').innerText = content.otherArea;
                document.getElementById('parkingArea').innerText = content.parkingArea;
                document.getElementById('totalArea').innerText = content.totalArea;
                document.getElementById('serviceArea').innerText = content.serviceArea;
                document.getElementById('phraseTxt1').innerText = content.phraseTxt1;
                document.getElementById('phraseTxt2').innerText = content.phraseTxt2;
                document.getElementById('isoImage').src = <?php echo G5_THEME_IMG_URL ?>/unit/${content.isoImage};
                document.getElementById('optionImage').src = <?php echo G5_THEME_IMG_URL ?>/unit/${content.optionImage};
                document.getElementById('optionImage2').src = <?php echo G5_THEME_IMG_URL ?>/unit/${content.optionImage2};
                document.getElementById('floorImage').src = <?php echo G5_THEME_IMG_URL ?>/unit/${content.floorImage};
                document.getElementById('floorImage2').src = <?php echo G5_THEME_IMG_URL ?>/unit/${content.floorImage2};
                
            } else {
                console.error("ID에 대한 데이터가 없습니다:", id);
            }
        }

        // 탭 클릭 이벤트 리스너 설정
        document.querySelectorAll('.tabnav a').forEach(tab => {
            tab.addEventListener('click', function(event) {
                event.preventDefault();
                
                // 현재 활성화된 탭과 콘텐츠를 비활성화
                document.querySelectorAll('.tabnav a, .tab-pane').forEach(element => {
                    element.classList.remove('active');
                });
                
                // 클릭한 탭 활성화
                this.classList.add('active');
                
                // 클릭한 탭의 href 속성에 따라 콘텐츠 활성화
                const id = this.getAttribute('data-id');
                document.getElementById(id).classList.add('active');
                
                // 콘텐츠 업데이트
                updateContent(id);
            });
        });

        // 페이지 로드 시 기본 탭 설정 (첫 번째 탭)
        document.querySelector('.tabnav a').click();
    </script>