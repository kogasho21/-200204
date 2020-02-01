// var $ = require('jQuery');
// var testJs = require('./modules/test.js');

//jQuery
$(function() {
  var url = location.pathname.split("/")[1];
  $(".gnav > li > a").each(function(){
    var href = $(this).attr("href").split("/")[1];
    if( href == url ) {
        $(this).addClass("active");
      } else {
        $(this).removeClass('active');
      }
  });
});

$(function(){
  $('.icon-fav').click(function(){
    $(this).toggleClass('is-active');
  });
});

$(function() {
  // アップロードするファイルを選択
  var setFileInput = $('.form_img');
  setFileInput.each(function(){
    var selfFile = $(this);
    var selfInput = $(this).find('input[type=file]');

    selfInput.change(function() {
      var file = $(this).prop('files')[0];
      // 画像以外は処理を停止
      if (! file.type.match('image.*')) {
        // クリア
        $(this).val('');
        return;
      }
      for (  var i = 0;  i < 10;  i++  ) {
        var reader = new FileReader();
        reader.onload = function() {
          var img_src = $('<img>').attr('src', reader.result);
          selfFile.find('.hasImg').append('<img alt="" id="uploadPreview">');
          $('#uploadPreview').attr('src', reader.result);
          $('.hasImg').addClass('is-img');
          $('.close-icon').addClass('is-active');
        }
      }
      reader.readAsDataURL(file);
    });
  });
});


// /home-slider
$(function () {
  $('.main-slide').slick({
    arrows: false,
    autoplay: true,
    /* ポイントここから～ */
    autoplaySpeed: 0,
    cssEase: 'linear',
    speed: 20000,
    /* ～ここまで */
    slidesToShow: 3,
    slidesToScroll: 1,
  });
});

$(function () {
  $('.work-slide').slick({
    slidesToShow: 1,
    fade: false,
    arrows: true,
    autoplay: false,
  });
});
