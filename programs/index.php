<?php include("../layout-include.php");
define('PAGE_LOCATION', 'programs');
define('SUBPAGE_HEADER_1', true);
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Custom Training Programs | Oakland University</title>
    <meta name="description" content="">
    <?php include("../layout-styles-scripts.php"); ?>
  </head>
<body>

<?php include("../layout-header.php"); ?>










<section class="hero-new hero-new--sub-page-alt" data-in-view="once">
  <div class="hero-new__background-main" style="background-image: url(../img/bg8.jpg)"></div>
  <div class="hero-new__background" style="background-image: url(../img/dots1-bottom.png)"></div>
  <div class="sw">
    <div class="hero-new__text">
      <h1>
        <span>P</span><span class="delay-1">r</span><span>o</span><span class="delay-1">g</span><span>r</span><span>a</span><span class="delay-2">m</span><span class="delay-1">s</span>
      </h1>
      <p>View our currently available training modules below.</p>
    </div>
    <div class="hero-new__links">
      <a href="software/">Software</a>
      <a href="safety-critical-systems/">Safety Critical Systems</a>
      <a href="electric-hybrid-vehicles/">Electric and Hybrid Vehicles</a>
      <a href="embedded-systems/">Embedded Systems</a>
      <a href="wireless/">RF and Wireless</a>
    </div>
  </div>
</section>










<section class="results-tabs" data-in-view="once">
  <div class="sw">

  <!--
    <div class="form-select-container controls">
      <select class="results-select">
        <option value="all" data-filter="all">All Programs</option>
        <option value=".software" class="filter" data-filter=".software">Software</option>
        <option value=".safety" class="filter" data-filter=".safety">Safety Critical Systems</option>
        <option value=".ev" class="filter" data-filter=".ev">Electric and Hybrid Vehicles</option>
        <option value=".embedded" class="filter" data-filter=".embedded">Embedded Systems</option>
        <option value=".wireless" class="filter" data-filter=".wireless">RF and Wireless</option>
      </select>
    </div>
    

    <ul class="results-tabs-top">
      <li class="results-tabs-title viewall"><a class="filter selected" data-filter="all">All Programs</a></li>
      <li class="results-tabs-title filterli"><a class="filter" data-filter=".software">Software</a></li>
      <li class="results-tabs-title filterli"><a class="filter" data-filter=".safety">Safety Critical Systems</a></li>
      <li class="results-tabs-title filterli"><a class="filter" data-filter=".ev">Electric and Hybrid Vehicles</a></li>
      <li class="results-tabs-title filterli"><a class="filter" data-filter=".embedded">Embedded Systems</a></li>
      <li class="results-tabs-title filterli"><a class="filter" data-filter=".wireless">RF and Wireless</a></li>
    </ul>
-->

    <div class="results-tabs-content" data-in-view="once">

      <div class="mix software">
        <a href="software/" class="category">
          <div class="category__img">
            <img src="../img/pic9-2.jpg" alt="Software">
          </div>
          <div class="category__bottom">
            <h3 class="category__bottom-title"><span>Software</span></h3>
            <span class="view-more"><span class="mh">See </span>Details</span>
          </div>
        </a>
      </div>

      <div class="mix safety">
        <a href="safety-critical-systems/" class="category">
          <div class="category__img">
            <img src="../img/pic10.jpg" alt="Safety Critical Systems">
          </div>
          <div class="category__bottom">
            <h3 class="category__bottom-title"><span>Safety Critical Systems</span></h3>
            <span class="view-more"><span class="mh">See </span>Details</span>
          </div>
        </a>
      </div>

      <div class="mix ev">
        <a href="electric-hybrid-vehicles/" class="category">
          <div class="category__img">
            <img src="../img/pic6.jpg" alt="Electric and Hybrid Vehicles">
          </div>
          <div class="category__bottom">
            <h3 class="category__bottom-title"><span>Electric and Hybrid Vehicles</span></h3>
            <span class="view-more"><span class="mh">See </span>Details</span>
          </div>
        </a>
      </div>

      <div class="mix embedded">
        <a href="embedded-systems/" class="category">
          <div class="category__img">
            <img src="../img/pic11.jpg" alt="Embedded Systems">
          </div>
          <div class="category__bottom">
            <h3 class="category__bottom-title"><span>Embedded Systems</span></h3>
            <span class="view-more"><span class="mh">See </span>Details</span>
          </div>
        </a>
      </div>

      <div class="mix wireless">
        <a href="wireless/" class="category">
          <div class="category__img">
            <img src="../img/pic13.jpg" alt="RF and Wireless">
          </div>
          <div class="category__bottom">
            <h3 class="category__bottom-title"><span>RF and Wireless</span></h3>
            <span class="view-more"><span class="mh">See </span>Details</span>
          </div>
        </a>
      </div>

    </div><!--results-tabs-content-->


  </div>
</section>










<?php include("../layout-footer.php"); ?>



<script src="../js/vendor/mixitup/dist/mixitup.js"></script>
<script src="../js/mixitup-custom.js"></script>



</body>
</html>