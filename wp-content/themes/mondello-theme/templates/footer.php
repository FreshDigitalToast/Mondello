<script>
$(function() {
  var $slides = $('#slides');
  var $slides2 = $('#slides2');

  Hammer($slides[0]).on("swipeleft", function(e) {
    $slides.data('superslides').animate('next');
  });

  Hammer($slides[0]).on("swiperight", function(e) {
    $slides.data('superslides').animate('prev');
  });

  $slides.superslides({
    play: 6000,
    hashchange: false,
    animation: 'fade'
  });

  $slides2.superslides({
    play: 6000,
    hashchange: false,
    animation: 'fade',
    inherit_width_from: '.slide-wrap',
    inherit_height_from: '.slide-wrap'
  });
});
</script>

<?php wp_footer(); ?>
