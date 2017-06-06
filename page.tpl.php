<div id="wrapper">
    <div class="navbar">
        <div class="container">
            <div class="row">
                <div class="column-3 column-m-8 navbar__logo">
                    <a href="<?php print $front_page;?>">
                      <img src="<?php print $directory;?>/images/logo.png" alt="<?php print $site_name;?>" class="logo responsive" />
                    </a>
                </div>
                <div class="column-9 column-m-4 hidden__mobile">
                    <div class="block-right">
                        <?php if ($main_menu): ?>
                              <div class="mainmenu">
                                <?php print theme('links__system_main_menu', array(
                                  'links' => $main_menu,
                                  'attributes' => array(
                                    'class' => array('mainmenu__list'),
                                  ),
                                )); ?>
                              </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="column-m-4 hidden__desktop mainmenu__mobile">
                    <span onclick="openNav()">&#9776;</span>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax">
        <div class="parallax__body">
            <?php if ($page['parallax']): ?>    
                <?php print render($page['parallax']); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="event">
        <div class="container">
            <?php if ($page['event']): ?>    
                <?php print render($page['event']); ?>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="involved">
        <div class="container">
            <?php if ($page['involved']): ?>    
                <?php print render($page['involved']); ?>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="mission">
        <div class="container">
            <?php if ($page['mission']): ?>    
                <?php print render($page['mission']); ?>
            <?php endif; ?>
        </div>
    </div>

    
<?php if (!drupal_is_front_page()) { ?>
  <div class="container" id="content">
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print render($messages); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php print render($page['content']); ?>
  </div>
<?php } ?>

    <div class="blog">
        <div class="container">
            <?php if ($page['blog']): ?>    
                <?php print render($page['blog']); ?>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="footer">
        <div class="container">
            <div class="row">
                <?php if ($page['footer']): ?>    
                    <?php print render($page['footer']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="myNav" class="navbar__overlay">
                          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                          <div class="navbar__overlay--content">
                            <div class="mainmenu__mobile">
                                <?php print theme('links__system_main_menu', array(
                                  'links' => $main_menu,
                                  'attributes' => array(
                                    'class' => array('mainmenu__list'),
                                  ),
                                )); ?>
                              </div>
                          </div>
                </div>
</div>