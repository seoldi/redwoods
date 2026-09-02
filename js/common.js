

// $(document).ready(function () {
//     // 모바일 장치인지 확인
//     var isMobile = /Android|webOS|iPhone/i.test(navigator.userAgent);

//     if (isMobile) {
//         // 모바일 장치에서 사용할 새로운 비디오 코드
//         var mobileVideoCode = "GruznEWVrTA";

//         // iframe의 src 속성 업데이트
//         $(".video-container iframe").attr("src", "https://www.youtube.com/embed/" + mobileVideoCode + "?rel=0&autoplay=1&mute=1&controls=0&loop=1&playlist=" + mobileVideoCode);
//     }
// });

// $(window).resize(function () {
//     // width값을 가져오기
//     var width_size = window.outerWidth;

//     // jQuery
//     if ($(window).width() < 500) {
//         var mobileVideoCode = "GruznEWVrTA";
//         $(".video-container iframe").attr("src", "https://www.youtube.com/embed/" + mobileVideoCode + "?rel=0&autoplay=1&mute=1&controls=0&loop=1&playlist=" + mobileVideoCode);
//     } else {
//         var mobileVideoCode = "GruznEWVrTA";
//         $(".video-container iframe").attr("src", "https://www.youtube.com/embed/" + mobileVideoCode + "?rel=0&autoplay=1&mute=1&controls=0&loop=1&playlist=" + mobileVideoCode);
//     }
// });


// // TabMenu
//   $(function () {
//       // 대메뉴 탭메뉴
//       $(".tabcontent > div").hide();
//       $(".tabnav a")
//           .click(function () {
//               $(".tabcontent > div").hide().filter(this.hash).fadeIn();
//               $(".tabnav a").removeClass("active");
//               $(this).addClass("active");
//               return false;
//           })
//           .filter(":eq(0)")
//           .click();

//       //
//       $(".aptContent > div").hide();
//       $(".aptNav a")
//           .click(function () {
//               $(".aptContent > div").hide().filter(this.hash).fadeIn();
//               $(".aptNav a").removeClass("active");
//               $(this).addClass("active");
//               return false;
//           })
//           .filter(":eq(0)")
//           .click();

//       //
//       $(".otContent > div").hide();
//       $(".otNav a")
//           .click(function () {
//               //alert('Comming Soon');
//               $(".otContent > div").hide().filter(this.hash).fadeIn();
//               $(".otNav a").removeClass("active");
//               $(this).addClass("active");
//               return false;
//           })
//           .filter(":eq(0)")
//           .click();
//   });


