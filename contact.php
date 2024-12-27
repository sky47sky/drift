<?php include("layout-include.php");
define('PAGE_LOCATION', 'contact');
define('SUBPAGE_HEADER_1', true);
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Contact | Engineering Institute | Oakland University</title>
    <meta name="description" content="">
    <?php include("layout-styles-scripts.php"); ?>
  </head>
<body>

<?php include("layout-header.php"); ?>







<section class="hero-new hero-new--sub-page-alt" data-in-view="once">
  <div class="hero-new__background-main" style="background-image: url(img/bg7.jpg)"></div>
  <div class="hero-new__background" style="background-image: url(img/dots1-bottom.png)"></div>
  <div class="sw">
    <div class="hero-new__text">
      <h1>
        <span>C</span><span class="delay-1">o</span><span>n</span><span class="delay-1">t</span><span>a</span><span>c</span><span class="delay-2">t</span> 
        <span>U</span><span class="delay-2">s</span>
      </h1>
      <p>Get in touch! We look forward to hearing from you.</p>

    </div>
  </div>
</section>









<section class="contact-form" data-in-view="once">
  <div class="sw sw--narrow">
    <div class="contact-form__content">
      <div class="contact-form__content__inner">
        <img class="black" src="<?php echo ROOT_PATH; ?>/img/logo/Black logo - no background.svg" alt="Engineering Institute">

        <a href="https://www.google.com/maps/place/Oakland+University/@42.6678782,-83.2082347,15z/data=!4m6!3m5!1s0x8824ea924a895f3f:0xe994efb06dc14099!8m2!3d42.6678782!4d-83.2082347!16zL20vMDJnOGp0?entry=ttu" target="_blank" class="address">
          <span>318 Meadow Brook Rd<br>
          Rochester, Michigan 48309</span>
        </a>
        <a href="mailto:ei@oakland.edu" class="email"><span>ei@oakland.edu</span></a>
      </div>
    </div>
    <div class="contact-form__form contact-form__form--map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11734.76869395133!2d-83.2082347!3d42.6678782!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824ea924a895f3f%3A0xe994efb06dc14099!2sOakland%20University!5e0!3m2!1sen!2sus!4v1698297064233!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>








<section class="image-grid image-grid--gray-bg">
  <div class="sw">
    <div class="image-grid-container" data-in-view="once">
      <div class="image-row">
        <div class="image-container image-06"><div class="image lozad" data-background-image="img/collage/compressed/27.jpg"></div></div>
        <div class="image-container image-07"><div class="image lozad" data-background-image="img/collage/compressed/15.jpg"></div></div>
        <div class="image-container image-08"><div class="image lozad" data-background-image="img/collage/compressed/21.jpg"></div></div>
        <div class="image-container image-09"><div class="image lozad" data-background-image="img/collage/compressed/39.jpg"></div></div>
      </div>
    </div>
  </div>
</section>












<?php include("layout-footer.php"); ?>







</body>
</html>