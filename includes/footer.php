<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 footer3 mt-5">
        <a href="index.php"> <img src="images/logo1.png" class="img-fluid" alt="img"> </a>
        <div class="footer1">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>


        <!-- Social Box -->
        <ul class="d-flex social-box">
          <li>
            <a href="#" class="fab fa-facebook-f"></a>
          </li>
          <li>
            <a href="#" class="fa-brands fa-instagram"></a>
          </li>
          <li>
            <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
          </li>

        </ul>
      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3  mt-5 ">
        <h4 class="mb-4">QUICK LINKS</h4>
        <ul class="footer2">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="shop.php">SHOP</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3  mt-5">
        <h4 class="mb-4">CONTACT US</h4>
        <div class="footer3">
          <h6>Address</h6>
          <p>Houston 8835 Long Point Rd</p>
          <h6>Email Address</h6>
          <p>Info@gmail.com</p>
          <h6>Phone Number</h6>
          <p>(832) 393-2000</p>
        </div>
      </div>


      <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center  mb-3">
        <div class="footer-bottom">
          <div class="clearfix">
            <div class="pull-left">
              <div class="copyright mt-3">
                Copyright © 2023 LEAK ALERT - New Project. All Rights Reserved.
              </div>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
</section>






<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/bootstrap.min.js.map"></script> -->
<script src="js/slick.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl-custom.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="js/custom.js"></script>

<script>
  document.getElementsByTagName("body")[0].style.overflowX = "hidden";
</script>



<script>
  $(function() {
    $('a[href*=#]').on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 500, 'linear');
    });
  });
</script>

<!-- testimonal javascript -->

<script>
  (function() {
    "use strict";

    var carousels = function() {
      $(".owl-carousel1").owlCarousel({
        loop: true,
        center: true,
        margin: 0,
        responsiveClass: true,
        nav: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          680: {
            items: 1,
            nav: false,
            loop: false
          },
          1000: {
            items: 3,
            nav: true
          }
        }
      });
    };

    (function($) {
      carousels();
    })(jQuery);
  })();
</script>

<!-- scroll-top the page  -->

<script>
  var btn = $('#button');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '300');
  });
</script>


<!-- quantity change  -->

<script>
  jQuery(document).ready(($) => {
    $('.quantity').on('click', '.plus', function(e) {
      let $input = $(this).prev('input.qty');
      let val = parseInt($input.val());
      $input.val(val + 1).change();
    });

    $('.quantity').on('click', '.minus',
      function(e) {
        let $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        if (val > 0) {
          $input.val(val - 1).change();
        }
      });
  });
</script>

<!-- slick card slider -->

<script>
  $('.your-class').slick({
    dots: false,
    infinite: true,
    arrow: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
</script>


<!-- active page on click -->

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Hide the loader after a delay (e.g., 3 seconds)
    setTimeout(function() {
      var loader = document.querySelector('.loader');
      loader.style.display = 'none';
    }, 3000); // Adjust the delay as needed
  });
</script>






</body>

</html>