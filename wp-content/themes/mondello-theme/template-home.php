<?php
/*
Template Name: Homepage Template
*/
?>

<div id="section2" class="row">
  <div class="col-sm-12 col-md-4 col-lg-4">
    <div class="content-wrap" id="content1">
      <div class="logo"><a href="/"><img src="/wp-content/uploads/2016/04/logo_black_490x177.png" /></a></div>
      <h2 class="tagline">Brand new 1, 2 & 3 bedroom architecturally designed apartments</h2>
        <a id="displayText" class="register-button" href="javascript:toggle();"><span>R&nbsp;e&nbsp;g&nbsp;i&nbsp;s&nbsp;t&nbsp;e&nbsp;r&nbsp; &nbsp;N&nbsp;o&nbsp;w</span></a>
    </div>
    <div id="toggleText" style="display: none">
      <div class="displayText-wrap"><a id="displayText" href="javascript:toggle();"></a></div>
      <?php echo do_shortcode('[contact-form-7 id="23" title="Register Now"]'); ?>
    </div>
  </div>
  <div class="col-sm-12 col-md-8 col-lg-8 slide-col">
    <div id="slides2" class="slide-wrap">
      <div class="slides-container">
        <img src="/wp-content/uploads/2016/04/home-section2-01.jpg">
        <img src="/wp-content/uploads/2016/04/home-section2-02.jpg">
        <img src="/wp-content/uploads/2016/04/home-section2-03.jpg">
        <img src="/wp-content/uploads/2016/04/home-section2-04-2.jpg">
        <img src="/wp-content/uploads/2016/04/home-section2-05.jpg">
        <img src="/wp-content/uploads/2016/04/home-section2-06.jpg">
      </div>
    </div>
  </div>
</div>

<script language="javascript"> 
function toggle() {
    var ele = document.getElementById("toggleText");
    var text = document.getElementById("displayText");
    if(ele.style.display == "block") {
        ele.style.display = "none";
        text.innerHTML = "<span>R&nbsp;e&nbsp;g&nbsp;i&nbsp;s&nbsp;t&nbsp;e&nbsp;r&nbsp; &nbsp;N&nbsp;o&nbsp;w</span>";
        $('#content1').show();
    }
    else {
        ele.style.display = "block";
        text.innerHTML = "<span>R&nbsp;e&nbsp;g&nbsp;i&nbsp;s&nbsp;t&nbsp;e&nbsp;r&nbsp; &nbsp;N&nbsp;o&nbsp;w</span>";
        $('#content1').hide();
    }
} 
</script>

<script type="text/javascript">
$(document).ready(function() {
  function setHeight() {
    windowHeight = $(window).height();
    windowWidth = $(window).width();
    /*** If window width > 1024px ***/
    if (windowWidth > 991) {
     calContentWidth = (windowWidth * 0.3333333333333333) - 30;
     calSlideWidth = (windowWidth * 0.6666666666666667) - 30;
     calFormHeight = (windowHeight - 26);
     calSlideHeight = windowHeight + 60;
     $('.content-wrap').css('min-height', windowHeight);
     $('#toggleText').css('min-height', windowHeight);
     $('.form-wrap').css('min-height', calFormHeight);
     $('.slide-wrap').css('height', calSlideHeight);

    } else {
     calContentWidth = windowWidth;
     calSlideWidth = windowWidth;
     $('.slide-wrap').css('height', windowHeight);
    }

    /*** left Column (content) ***/
    /*$('.content-wrap').css('min-height', windowHeight);*/
    $('.content-wrap').css('max-width', calContentWidth);
    $('#toggleText').css('max-width', calContentWidth);
    /*** left Column (slider) ***/
   /* $('.slide-wrap').css('height', windowHeight);*/
    $('.slide-wrap').css('width', calSlideWidth);
  };
  setHeight();

  $(window).resize(function() {
    setHeight();
  });
});
</script>



