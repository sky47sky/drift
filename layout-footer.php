<section class="cta-callout cta-callout--border" data-in-view="once" style="background-image: url(<?php echo ROOT_PATH; ?>/img/bg3.jpg)">
  <div class="cta-callout__container">
    <div class="cta-callout__background"></div>
    <div class="sw sw--narrow">
      <h2>Get Started with the <strong>Engineering Institute</strong></h2>
      <p><a href="<?php echo ROOT_PATH; ?>/contact.php" class="cta cta--arrow">Contact Us</a></p>
    </div>
  </div>
</section>




</main><!--sitewrap-->










<footer id="footer" data-in-view="once">
  <img class="big-logo" src="<?php echo ROOT_PATH; ?>/img/logo/Gold logo only.svg">
  <div class="sw">
    <div class="footer__top">
      <a href="<?php echo ROOT_PATH; ?>/" class="logo">
        <img class="white" src="<?php echo ROOT_PATH; ?>/img/logo/Color logo - no background.svg" alt="Engineering Institute">
      </a>
    </div>
    <div class="footer__columns">
      <div class="column column--1">
        <ul>
          <li>
            <a href="https://www.google.com/maps/place/Oakland+University/@42.6678782,-83.2082347,15z/data=!4m6!3m5!1s0x8824ea924a895f3f:0xe994efb06dc14099!8m2!3d42.6678782!4d-83.2082347!16zL20vMDJnOGp0?entry=ttu" target="_blank" class="address">
              <span>318 Meadow Brook Rd<br>
              Rochester, Michigan 48309</span>
            </a>
            <a href="mailto:ei@oakland.edu" class="email"><span>ei@oakland.edu</span></a>
          </li>
        </ul>
      </div>
      <div class="column column--2">
      </div>
      <div class="column column--4">
        <nav class="main-menu" role="navigation">
          <ul class="menu">
            <li <?php if ( (defined('PAGE_LOCATION')) && (PAGE_LOCATION == 'home') ) { ?>class="current-page"<?php } ?>>
              <a href="<?php echo ROOT_PATH; ?>/"><span>Home</span></a>
            </li>
            <li <?php if ( (defined('PAGE_LOCATION')) && (PAGE_LOCATION == 'custom-training') ) { ?>class="current-page"<?php } ?>>
              <a href="<?php echo ROOT_PATH; ?>/custom-training.php"><span>Custom Training</span></a>
            </li>
            <li <?php if ( (defined('PAGE_LOCATION')) && (PAGE_LOCATION == 'programs') ) { ?>class="current-page"<?php } ?>>
              <a href="<?php echo ROOT_PATH; ?>/programs/"><span>Programs</span></a>
            </li>
            <li <?php if ( (defined('PAGE_LOCATION')) && (PAGE_LOCATION == 'research-team') ) { ?>class="current-page"<?php } ?>>
              <a href="<?php echo ROOT_PATH; ?>/our-team.php"><span>Our Team</span></a>
            </li>
            <li class="cta-button<?php if ( (defined('PAGE_LOCATION')) && (PAGE_LOCATION == 'about') ) { ?> current-page<?php } ?>">
              <a href="<?php echo ROOT_PATH; ?>/contact.php">Contact Us</a>
            </li>
            <li class="navindicator navindicator mh"></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="sw">
      <p>Copyright &copy; <?php date_default_timezone_set('America/Detroit'); echo date("Y"); ?> Engineering Institute</p>
    </div>
  </div>
</footer>




<!-- back to top button -->
<a href="#" class="back-to-top" aria-label="Back to Top" title="Back to Top"></a>



</div><!--off-canvas-wrapper-->





<script src="<?php echo ROOT_PATH; ?>/js/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/js/vendor/foundation/foundation.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/js/dist/app.js"></script>





<script type="text/javascript" src="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>





<!-- save location after form submit -->
<?php
$scrollx = 0;
$scrolly = 0;
if(!empty($_REQUEST['scrollx'])) {
$scrollx = htmlentities($_REQUEST['scrollx'], ENT_QUOTES);
}
if(!empty($_REQUEST['scrolly'])) {
$scrolly = htmlentities($_REQUEST['scrolly'], ENT_QUOTES);
}
?>
<script>
window.scrollTo(<?= "$scrollx" ?>, <?= "$scrolly" ?>);
</script>
