<?php wp_footer(); ?>
<script>
      jQuery(document).ready(function ($) {

        $("#owl-slider").owlCarousel ({
            navigation: true,
            dots: true,
            nav: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 1, 
            animateOut: false, 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false
        });

        $('.menu-mobile-button').on('click', function() {
  			  $('.mobile-menu').addClass('active');
		    });

        $('.close-icon').on('click', function() {
            $('.mobile-menu').removeClass('active');
        });

        $(".language-block").click(function () {
            $("#languages").slideToggle(300);
            return false;
        });
        $(".language-block").click(function () {
            $(".language-icon-dowm").toggleClass('active');
            return false;
        });

        var jack = 3762631.88; 
        var timer = setInterval(function () {
            jack += 0.21; 
            $(".big-jackots").text(numeral(jack).format('0 0[.]00'));
        }, 5000);

        $('.single-slots-demo-back-play').on('click', function() {
          $('.single-slots-demo-back').removeClass('play');
          $('.single-slots-demo-block').addClass('play');
		    });

        document.querySelector('.full-btn').addEventListener('click', function(){
          if(document.documentElement.webkitRequestFullscreen) {
            document.querySelector('.demo-iframe').webkitRequestFullscreen();
          }
          else{
            document.documentElement.mozRequestFullScreen();
          }
        });

      });
    </script>
</body>
</html>
