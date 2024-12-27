<?php include("layout-include.php");
define('PAGE_LOCATION', 'home');
define('SUBPAGE_HEADER_1', true);
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Engineering Institute | Oakland University</title>
    <meta name="description" content="">
    <?php include("layout-styles-scripts.php"); ?>
  </head>
<body>

<?php include("layout-header.php"); ?>











<section class="hero-new" data-in-view="once">
  <div class="hero-new__background" data-background-image="img/dots1-bottom.png)"></div>
  <video id="homebgvid-duplicate" class="homebgvid-duplicate" preload="none" playsinline muted loop aria-hidden="true" tabindex="-1" src="video/hero-slowed-1000.mp4"></video>
  <script>
    window.addEventListener("load", function(){
      const bgvideo = document.getElementById('homebgvid-duplicate')

      jQuery(document).ready(function () {

        bgvideo.play();
        
        setTimeout(function() {
          $('.homebgvid-duplicate').addClass('fadein');
        }, 500);

      })
    });
  </script>
  <div class="sw">
    <div class="hero-new__text">
      <h1>
        <span>E</span><span class="delay-1">n</span><span>g</span><span class="delay-1">i</span><span>n</span><span>e</span><span class="delay-2">e</span><span class="delay-1">r</span><span>i</span><span class="delay-2">n</span><span>g</span>
        <br class="hum">
        <span>I</span><span class="delay-2">n</span><span>s</span><span class="delay-1">t</span><span class="delay-1">i</span><span>t</span><span class="delay-3">u</span><span class="delay-1">t</span><span class="delay-2">e</span>
      </h1>
      <p>Join Oakland University in letting us train your employees with real-world technology and actionable education. <br>We offer both custom training and open enrollment programs.</p>
    </div>
    <div class="hero-new__ctas">
      <a href="custom-training.php" class="cta cta--gold-clear-gold">Custom Training</a>
      <a href="programs/" class="cta cta--gold-clear-gold">Programs</a>
    </div>
  </div>
  <a href="#intro" class="hero-new__jump"></a>
</section>














<section class="side-bg-img-text" data-in-view="once" style="background-image: url(img/bg25-2.jpg)" id="intro">
  <div class="sw">
    <div class="text">
      <h2>Custom Training with <strong>Measurable Results</strong></h2>
      <p>At the Engineering Institute, we will take your engineers through extensive training modules that will help them better perform in an ever-growing competitive environment. Our material and courses are all based on helping your business master the following core topics:</p>
      <ul class="checkmarks">
        <li><strong>Employee Retention</strong></li>
        <li><strong>Productivity</strong></li>
        <li><strong>Competition</strong></li>
      </ul>
      <p>Your engineers deserve the real-world, hands-on experience our training provides. <a href="contact.php">Contact us today</a> and we'll listen to your needs and carve out a pathway to success for your business and employees.</p>
      <a href="custom-training.php" class="cta cta--arrow cta--gold-clear-gold">How It Works</a>
    </div>
    <img data-src="img/bg25m.jpg" class="hum lozad" alt="Engineering students">
  </div>
</section>










<section class="hero-w-slider" data-in-view="once" id="start">
  <div class="sw">
    <button class="hero-w-slider__toggle pause">Pause</button>
    <div class="hero-w-slider__left">
      <div class="left__slider-text">
        <span class="text__word">We Will Help You</span> 
        <ul class="slider__word" data-in-view="once">
          <li><span>Maintain Employee Retention</span></li>
          <li><span>Maximize Productivity</span></li>
          <li><span>Outperform Competition</span></li>
        </ul>
      </div>
    </div>
    <div class="hero-w-slider__right">
      <div class="right__slider" data-in-view="once">
        <div class="slider__content" id="benefit-1">
          <img class="content__img" src="img/collage/compressed/01.jpg" alt="Engineering student on computer">
          <div class="content__text">
            <h2 class="hum">We Will Help You <span>Maintain Employee Retention</span></h2>
            <p>Investing in custom training programs for your employees is a powerful strategy to enhance employee retention. When companies demonstrate a commitment to professional development, employees feel valued and appreciated, increasing job satisfaction and loyalty.</p>
            
            <p>By offering tailored training opportunities, you can address individual career aspirations and skill gaps, reducing turnover rates and the associated costs of hiring and onboarding new staff. Moreover, well-trained employees are more likely to see a clear path for advancement within the company, fostering a long-term commitment to your organization.</p>
          </div>
        </div>
        <div class="slider__content" id="benefit-2">
          <img class="content__img" src="img/pic2.jpg" alt="Engineering students in lab">
          <div class="content__text">
            <h2 class="hum">We Will Help You <span>Maximize Productivity</span></h2>
            <p>Participating in a custom training program can significantly enhance employee productivity. When employees are equipped with the latest skills and knowledge relevant to their roles, they can perform their tasks more efficiently and with greater competence. This not only reduces errors and enhances the quality of work but also accelerates project timelines and innovation.</p>
            
            <p>Training programs tailored to your company's specific needs ensure that employees are learning applicable skills that can be immediately implemented, maximizing the return on your training investment. Enhanced productivity translates to better overall performance and a stronger bottom line for your business.</p>
          </div>
        </div>
        <div class="slider__content" id="benefit-3">
          <img class="content__img" src="img/pic4.jpg" alt="Engineering student in classroom">
          <div class="content__text">
            <h2 class="hum">We Will Help You <span>Outperform Competition</span></h2>
            <p>Staying ahead of your competition requires a highly skilled and adaptable workforce. Custom training programs provide your employees with cutting-edge skills and industry-specific knowledge that keep your company at the forefront of your field. By continually updating your team’s capabilities, you can quickly respond to market changes, implement new technologies, and innovate effectively.</p>
            
            <p>This proactive approach not only differentiates your company from competitors but also positions you as a leader in the industry. The ability to consistently deliver superior products and services ensures a competitive edge in the marketplace.</p>
          </div>
        </div>
      </div>
      <div class="right__nav" data-in-view="once">
        <ul class="nav__ul">
          <li><a data-item="Employee Retention" tabindex="0"></a></li>
          <li><a data-item="Productivity" tabindex="0"></a></li>
          <li><a data-item="Competition" tabindex="0"></a></li>
        </ul>
      </div>
      <div class="slider-progress">
        <div class="progress"></div>
      </div>
    </div>
  </div>
</section>







<section class="image-grid">
  <div class="sw">
    <div class="image-grid-container" data-in-view="once">
      <div class="image-row">
        <div class="image-container image-01"><div class="image lozad" data-background-image="img/collage/compressed/19.jpg"></div></div>
        <div class="image-container image-02"><div class="image lozad" data-background-image="img/collage/compressed/03.jpg"></div></div>
        <div class="image-container image-03"><div class="image lozad" data-background-image="img/collage/compressed/22.jpg"></div></div>
      </div>
      <div class="image-row">
        <div class="image-container image-04"><div class="image lozad" data-background-image="img/collage/compressed/41.jpg"></div></div>
        <div class="image-container image-05"><div class="image lozad" data-background-image="img/collage/compressed/24.jpg"></div></div>
      </div>
      <div class="image-row">
        <div class="image-container image-06"><div class="image lozad" data-background-image="img/collage/compressed/30.jpg"></div></div>
        <div class="image-container image-07"><div class="image lozad" data-background-image="img/collage/compressed/04.jpg"></div></div>
        <div class="image-container image-08"><div class="image lozad" data-background-image="img/collage/compressed/28.jpg"></div></div>
        <div class="image-container image-09"><div class="image lozad" data-background-image="img/collage/compressed/15.jpg"></div></div>
      </div>
      <div class="image-row">
        <div class="image-container image-10"><div class="image lozad" data-background-image="img/collage/compressed/06.jpg"></div></div>
        <div class="image-container image-11"><div class="image lozad" data-background-image="img/collage/compressed/37.jpg"></div></div>
        <div class="image-container image-12"><div class="image lozad" data-background-image="img/collage/compressed/40.jpg"></div></div>
      </div>
    </div>
  </div>
</section>






<section class="faq">
  <div class="sw" data-in-view="once">
    <div class="faq__top">
      <h2>Frequently Asked Questions</h2>
    </div>
    <ul class="accordion" data-accordion data-allow-all-closed="true">
      <li class="accordion-item is-active" data-accordion-item>
        <a href="#" class="accordion-title">What exactly is the Engineering Institute?</a>
        <div class="accordion-content" data-tab-content>
          <p>The Engineering Institute is an organization within Oakland University that creates custom training programs for companies to train their employees.</p>
        </div>
      </li>
      <li class="accordion-item" data-accordion-item>
        <a href="#" class="accordion-title">Why should we invest in the Engineering Institute?</a>
        <div class="accordion-content" data-tab-content>
          <p>Training your employees through the Engineering Institute is an excellent way to get the exact training your employees need, which has a host of benefits. Additionally, there are many benefits paid forward to students, the community, and back to your company.</p>
          
          <p>See the <a href="custom-training.php">How It Works page</a> to learn more.</p>
        </div>
      </li>
      <li class="accordion-item" data-accordion-item>
        <a href="#" class="accordion-title">I'm sold! How do we get started?</a>
        <div class="accordion-content" data-tab-content>
          <p>To discuss what type of training you’re interested in and to learn more about pricing and timeline, please <a href="contact.php">reach out to us</a>.</p>
          
          <p>We look forward to hearing from you!</p>
        </div>
      </li>
    </ul>
  </div>
</section>














<?php include("layout-footer.php"); ?>




<script>
$(function() {

    $(".right__slider").slick({
      asNavFor: '.nav__ul, .slider__word',
      slidesToShow: 1,
      slidesToScroll: 1,
      swipeToSlide: true,
      centerMode: false,
      infinite: true,
      arrows: false,
      //dots: true,
      autoplay: true,
      autoplaySpeed: 7000,
      speed: 700,
      accessibility: true,
      //pauseOnFocus: true,
      //pauseOnHover: true,
      //pauseOnDotsHover: true,
      adaptiveHeight: false,
      responsive: [
        {
          breakpoint: 1336,
          settings: {
            adaptiveHeight: true
          }
        },
        {
          breakpoint: 1024,
          settings: "unslick"
        }
      ]
  });

  $(".nav__ul").slick({
      asNavFor: '.right__slider, .slider__word',
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable:false,
      infinite: true,
      swipeToSlide: false,
      vertical: true,
      verticalSwiping: false,
      centerMode: false,
      arrows: false,
      dots: true,
      accessibility: true,
      customPaging : function(slick, index) {
        var itemWord = slick.$slides.eq(index).find('a').data('item');
        return '<a href="#benefit-'+index+'" tabindex="0"><span>'+itemWord+'</span></a>';
      },
      responsive: [
        {
          breakpoint: 1024,
          settings: "unslick"
        }
      ]
  });

  $(".slider__word").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 700,
      draggable:false,
      infinite: true,
      swipeToSlide: false,
      vertical: true,
      verticalSwiping: false,
      centerMode: false,
      arrows: false,
      accessibility: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: "unslick"
        }
      ]
  });

  $(".right__slider .slick-dots").append("<li class='animated-dot'><li>");


  
  $(document).ready(function(){
    $('.right__slider').slick("setPosition", 0);
  });

  /*
  $(".hero-w-slider__right").hover(function() {
    $(this).toggleClass("play");
    if ($(this).hasClass("play")) {
      isPause = true;
      $('.right__slider').slick('slickPause');
      $(".hero-w-slider__toggle").html('Play')
      $(".hero-w-slider__toggle").addClass('play')
      $(".hero-w-slider__toggle").removeClass('pause')
    } else {
      isPause = false;
      $('.right__slider').slick('slickPlay');
      $(".hero-w-slider__toggle").html('Pause')
      $(".hero-w-slider__toggle").addClass('pause')
      $(".hero-w-slider__toggle").removeClass('play')
    }
  });
  */

  $(".hero-w-slider__toggle").click(function() {
    if ($(this).html() == 'Pause') {
      isPause = true;
      $('.right__slider').slick('slickPause');
      $(this).html('Play')
      $(".hero-w-slider__toggle").addClass('play')
      $(".hero-w-slider__toggle").removeClass('pause')
    } else {
      isPause = false;
      $('.right__slider').slick('slickPlay');
      $(this).html('Pause')
      $(".hero-w-slider__toggle").addClass('pause')
      $(".hero-w-slider__toggle").removeClass('play')
    }
  });

  $(".nav__ul").on("beforeChange", function() {
    if ($(".hero-w-slider__toggle").html() == 'Pause') {
      isPause = false;
      $('.right__slider').slick('slickPlay');
      $(".hero-w-slider__toggle").addClass('pause')
      $(".hero-w-slider__toggle").removeClass('play')
    } else {
      isPause = true;
      $('.right__slider').slick('slickPause');
      $(".hero-w-slider__toggle").addClass('play')
      $(".hero-w-slider__toggle").removeClass('pause')
    }
  });

  var time = 7;
  var $bar,
      isPause,
      tick,
      percentTime;

  $bar = $('.slider-progress .progress');

  function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    isPause = false;
    tick = setInterval(interval, 10);
  }

  function interval() {
    if ($(".hero-w-slider__right").hasClass("play")) {
      isPause = true;
    }
    if (isPause === false) {
      percentTime += 1 / (time + 0.1);
      $bar.css({
        width: percentTime + "%"
      });
      if (percentTime >= 100) {
        $(".right__slider").slick('slickNext');
        startProgressbar();
      }
    }
  }

  function resetProgressbar() {
    $bar.css({
      width: 0 + '%'
    });
    clearTimeout(tick);
  }

  startProgressbar();

  $(".right__slider").on("beforeChange", function() {
    resetProgressbar();
    startProgressbar();
    $bar.css({
      width: 100 + "%"
    });
  });

});
</script>



</body>
</html>