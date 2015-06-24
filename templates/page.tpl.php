<?php
// First we need to work out how many columns we are rendering
if (($page['sidebar_first']) || ($page['sidebar_second'])) {
  // At least two columns
  $cols = 2;
  $contentwidth = 'large-9';
  if (($page['sidebar_first']) && ($page['sidebar_second'])) {
    $cols = 3;
    $contentwidth = 'large-6';
  }
}
else {
  // Only the content column
  $cols = 1;
  $contentwidth = 'large-12';
}
?>
<div class="the-lady-main-div">
  <?php // User dashboard ?>
  <div id="usermenu" class="show-for-large-up">
    <div class="row">
      <div class="small-12 column">
        <?php print render($page['usermenu']); ?>
      </div>
    </div>
  </div><!-- #usermenu -->
  <?php // end User dashboard ?>

  <?php // Header ?>
  <header>
    <div class="row">
      <div class="large-12 column">
        <div class ="large-3 columns site-logo">
          <a href="<?php print $front_page; ?>">The Lady</a>
        </div>
        <div class="large-6 columns site-name-slogan">
          <div class="large-12 column name">
            <?php if ($site_name) { ?>
            <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
            <?php } // site-name  ?>
          </div>

          <div class="large-12 column slogan">
            <?php if ($site_slogan) { ?>
              <h2 id="site-slogan" class="left"><span class="swop"><?php print $site_slogan; ?></span></h2>
            <?php } // site-slogan?>
          </div>

        </div>

        <div class="large-3 columns social-links">
          <ul>
            <li><a target="_blank" href="http://www.facebook.com/thelady2015"  class="fa fa-facebook-official fa-3x"></a></li>
            <li><a target="_blank" href="https://twitter.com/TheLady2015"  class="fa fa-twitter fa-3x"></a></li>
          </ul>
        </div>

      </div>
    </div><!-- row -->
  </header>
  <?php // end Header ?>

  <div class="row">
    <div id="primarymainmenu" class="large-6 large-offset-6 medium-2 columns">
      <div class="row">
        <div>
          <nav class="top-bar" data-topbar>
            <ul class="title-area">
              <?php if ($site_name) { ?>
              <li class="name show-for-medium"><h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1></li>
              <?php } ?>
              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
        
            <section class="top-bar-section">
              <?php 
                $main_menu_attributes = array(
                  'id'     => 'main-menu-links',
                  'class'  => array('left'),
                );
                print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => $main_menu_attributes,)); ?>
            </section>
          </nav>
        </div>
      </div>
    </div><!-- primarymainmenu -->
  </div>

  <?php // Mission ?>
  <?php if (($is_front) && ($page['mission'])) { ?>
  <div id="mission" class="show-for-medium-up">
    <div class="row">
      <div class="small-12 column">
        <h1 class="pagetitle"><?php print $title ?></h1>
        <?php print render($page['mission']); ?>
      </div>
    </div>
  </div><!-- mission -->
  <?php } ?>

  <? // Triptych ?>
  <?php if ($page['triptych_first']) { ?>
  <div id="triptych">
    <div class="row">
      <div id="triptych-first" class="large-12 medium-4 columns">
        <?php if ($page['triptych_first']) { print render($page['triptych_first']); } else { print '&nbsp;';} ?>
      </div>
    </div><!-- row -->
  </div><!-- #triptych -->
  <?php } ?>


  <!--<div id="the-lady-headlines marquee">jQuery marquee is the best <b>marquee</b> plugin in the world</div> -->
  <?php // Main Content Area ?>
  <div id="content">

    <?php if (!$is_front) { ?>
    <?php } ?>
    <?php if (!empty($tabs['#primary'])) { ?>
      <div class="row tab-nav">
        <?php if ($tabs['#primary']): ?><nav id="tabnav" class="clearfix column"><?php print render($tabs); ?></nav><?php endif; ?>
      </div>
    <?php } ?>
    <?php if ($messages) { ?>
      <div class="wrapper row"><div class="inner"><?php print ($messages); ?></div></div><!-- messages -->
    <?php } // endif; ?>

    <div class="row">
      <?php // Sidebar-first ?>
      <?php if ($page['sidebar_first']) { ?>
      <div id="sidebar-first" class="large-3 columns">
        <?php print render($page['sidebar_first']); ?>
      </div><!-- #sidebar-first -->
      <?php } // endif sidebar-first ?>

      <?php // Main page content ?>
      <div id="pageContent" class="<?php print ($contentwidth); ?> columns">

        <?php if ($page['highlighted']) { ?>
        <div id="highlighted">
          <?php print render($page['highlighted']); ?>
        </div><!-- highlighted -->
        <?php } //endif; highlighted ?>

        <?php if (($title) && (!$is_front)) { ?>
          <?php print render($title_prefix); ?>
          <?php // dpm($node, 'page template'); ?>
          <?php
             if (!(isset($node) && ($node->type == 'property'))) {
            //   print ff_property_summaryline($node);
            //}
            ?>
            <h1 class="pagetitle"><?php print $title ?></h1>
            <?php } ?>
            <?php print render($title_suffix); ?>
        <?php } ?>
        
        <?php // Context allows for section titles and section subtitles ?>
        <?php // I'll use that functionality to render a sub-title for the user registration page ?>
        <?php if (isset($section_subtitle)) { ?>
        <h2 class="sectionsubtitle"><?php print render($section_subtitle); ?></h2>
        <?php } ?>

        <?php /* Find out if printing a full node by a user and print a different size of the userpic than node teaser */ ?>

        <?php if ($page['help']) { ?>
        <div id="drupalhelp">
          <?php print render($page['help']); ?>
        </div><!-- highlighted -->
        <?php } //endif; highlighted ?>

        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

        

        <div class="pageContent">
          <?php print render($page['content']); ?>
          <?php print render($page['latest_news_events']); ?>
        </div>

      </div><!-- #pageContent -->

      <?php // Sidebar-second ?>
        <?php if ($page['sidebar_second']) { ?>
        <div id="sidebar-second" class="large-3 columns">
          <?php print render($page['sidebar_second']); ?>
        </div><!-- #sidebar-first -->
      <?php } ?>

    </div><!-- row -->
  </div><!-- #content -->
  <?php // end Main Content Area ?>

  <?php // Polyptych ?>
  <?php if (($page['polyptych_first']) || ($page['polyptych_01']) || ($page['polyptych_02']) || ($page['polyptych_last'])) { ?>
  <div class="row show-for-medium-up">
    <section id="polyptych">
      <div id="polyptych-first" class="medium-6 large-3 column">
        <?php if ($page['polyptych_first']) { print render($page['polyptych_first']); } else { print '&nbsp;';} ?>
      </div>
      <div id="polyptych-01" class="medium-6 large-3 column">
        <?php if ($page['polyptych_01']) { print render($page['polyptych_01']); } else { print '&nbsp;';} ?>
      </div>
      <div id="polyptych-02" class="medium-6 large-3 column">
        <?php if ($page['polyptych_02']) { print render($page['polyptych_02']); } else { print '&nbsp;';} ?>
      </div>
      <div id="polyptych-last" class="medium-6 large-3 column">
        <?php if ($page['polyptych_last']) { print render($page['polyptych_last']); } else { print '&nbsp;';} ?>
      </div>
      
    </section>
  </div>
  <?php } ?>
  <?php // end Polyptych ?>

  <?php // Footer ?>
  <footer id="the-lady-footer">
    <div class="footer-menu row">
      <div class="large-8 columns subcription-div">
        <?php print render($page['footer_form']); ?>
      </div>
      <div class="large-4 columns footer-social-links">
          <div class="social-links">
            <ul>
              <li><a target="_blank" href="http://www.facebook.com/thelady2015" class="fa fa-facebook-official fa-2x"></a></li>
              <li><a target="_blank" href="https://twitter.com/TheLady2015" class="fa fa-twitter fa-2x"></a></li>
            </ul>
          </div>
      </div>
    </div>
    <nav class="footer">
        <div class="inner">
            <div class="left">
                <div class="copy"><a href="http://www.thelady.co.za">© THE LADY COPYRIGHT 2015</a></div>
            </div>
            <div class="right">
                <ul>
                    <li><a target="_blank" href="/thelady/home">Home</a></li>
                    <li><a target="_blank" href="/thelady/about">About</a></li>
                    <li><a target="_blank" href="/thelady/article-list">The Ladies</a></li>
                    <li><a target="_blank" href="/thelady/event-list">Events</a></li>
                    <li><a target="_blank" href="/thelady/sponsor-list">Sponsors</a></li>
                    <li><a target="_blank" href="/thelady/content/get-touch">Get In Touch</a></li>
                </ul>
            </div>
        </div>
    </nav>

</footer>
  <?php // end Footer ?>
</div>









