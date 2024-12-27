<div class="off-canvas-wrapper">


<div id="bodyintro">
  <a href="#sitewrap" class="screen-reader-text">Skip to main content</a>
  <a href="#sr-first-menu-item" class="screen-reader-text">Skip to navigation</a>
</div>





<div id="header-container">

  <header id="header">
    <div class="hfsw">

      <a href="<?php echo ROOT_PATH; ?>/" class="logo">
        <img class="white" src="<?php echo ROOT_PATH; ?>/img/logo/Color logo - no background.svg" alt="Engineering Institute">
        <img class="black" src="<?php echo ROOT_PATH; ?>/img/logo/Black logo - no background.svg" alt="Engineering Institute">
      </a>

      <div id="off-canvas-wrap" class="off-canvas off-canvas-main-menu in-canvas-for-large position-right" data-off-canvas data-transition="overlap" data-transition-time=".4s">
        <nav class="main-menu" role="navigation">
          <ul id="menu" class="vertical large-horizontal menu menu--main" data-responsive-menu="drilldown large-dropdown" data-hover-delay="100" data-closing-time="200">
            <li <?php if ( (defined('PAGE_LOCATION')) && (PAGE_LOCATION == 'home') ) { ?>class="current-page"<?php } ?>>
              <a href="<?php echo ROOT_PATH; ?>/" id="sr-first-menu-item"><span>Home</span></a>
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
            <li class="cta-button mh">
              <a href="<?php echo ROOT_PATH; ?>/contact.php">Contact Us</a>
            </li>
            <li class="hum">
              <a href="<?php echo ROOT_PATH; ?>/contact.php">Contact Us</a>
            </li>
            <li class="navindicator navindicator mh"></li>
          </ul>
        </nav>
      </div><!--off-canvas-wrap-->

      <button class="hamburger-icon hide-for-large" data-toggle="off-canvas-wrap" aria-expanded="false" aria-controls="off-canvas-wrap">
        <div class="lines">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
      </button>

    </div>
  </header>
</div><!--header-container-->






<main class="sitewrap" id="sitewrap">