<style>.subTl {display: none;} .container{max-width: 1100px;}</style>
<div id="plane">
 <div class="tab">
    <div class="tabnav">
      <a href="#tab01">59G Type</a>
      <a href="#tab02">49D Type</a>
      <a href="#tab03">26B Type</a>
    </div>
    <div class="tabcontent">

      <div id="tab01">
        <div class="responsive-box video-container">
            <iframe src="http://vr-land2.com/theterrace/wj/59g"></iframe>
        </div>
        <a href="http://vr-land2.com/theterrace/wj/59g" class="bt" target="_blank">새창열기</a>
      </div>

      <div id="tab02">
        <div class="responsive-box video-container">
            <iframe src="http://vr-land2.com/theterrace/wj/49d"></iframe>
        </div>
        <a href="http://vr-land2.com/theterrace/wj/49d" class="bt" target="_blank">새창열기</a>
      </div>

      <div id="tab03">
        <div class="responsive-box video-container">
            <iframe src="http://vr-land2.com/theterrace/wj/26b"></iframe>
        </div>
        <a href="http://vr-land2.com/theterrace/wj/26b" class="bt" target="_blank">새창열기</a>
      </div>

    </div>
  </div>
</div>
<script>
  $(function(){
    // 대메뉴 탭메뉴
    $('.tabcontent > div').hide();
    $('.tabnav a').click(function () {
      $('.tabcontent > div').hide().filter(this.hash).fadeIn();
      $('.tabnav a').removeClass('active');
      $(this).addClass('active');
      return false;
    }).filter(':eq(0)').click();

    //
    $('.aptContent > div').hide();
    $('.aptNav a').click(function () {
      $('.aptContent > div').hide().filter(this.hash).fadeIn();
      $('.aptNav a').removeClass('active');
      $(this).addClass('active');
      return false;
    }).filter(':eq(0)').click();

    //
    $('.otContent > div').hide();
    $('.otNav a').click(function () {
      $('.otContent > div').hide().filter(this.hash).fadeIn();
      $('.otNav a').removeClass('active');
      $(this).addClass('active');
      return false;
    }).filter(':eq(0)').click();
  });

</script>