<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<!--page.tpl.php-->
<?php print $mothership_poorthemers_helper; ?>
<div class="site-container">
<header class="page-level-header" role="banner">
  <div class="page-level-wrapper">
  <?php if ($logo): ?>
    <figure class="logo">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
    </figure>
  <?php endif; ?>

  <?php if($site_name OR $site_slogan ): ?>
  <?php if($site_name): ?>
    <?php print $site_name; ?>
  <?php endif; ?>
  <?php if ($site_slogan): ?>
    <h2><?php print $site_slogan; ?></h2>
  <?php endif; ?>
  <?php endif; ?>
  
  <?php print $home; ?>
  
  <?php if(!$is_front): ?>
    <?php print $breadcrumb; ?>
  <?php endif; ?>
  
  <?php if ($page['header']): ?>
    <div class="header region-header">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  </div>
</header>

<div class="page-level-main">
  <div class="page-level-wrapper">
  <?php if (isset($page['sidebar_first']) && $page['sidebar_first']): ?>
    <div class="page-sidebar sidebar sidebar-one">
    <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>

  <div class="page-main" role="main">
    <?php print render($title_prefix); ?>
    <?php if (isset($rich_title)): ?>
      <h1 class="rich-title"><?php print $rich_title; ?></h1>
    <?php elseif ($title): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if ($tabs): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

    <?php if($page['highlighted'] OR $messages){ ?>
      <div class="drupal-messages">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      </div>
    <?php } ?>


    <?php print render($page['content_pre']); ?>

    <?php print render($page['content']); ?>

    <?php print render($page['content_post']); ?>

  </div><!--/main-->

  <?php if ($page['sidebar_second']): ?>
    <div class="page-sidebar sidebar sidebar-two">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>
  </div><!-- /page-level-wrapper -->
</div><!--/page-->

<footer class="page-level-footer" role="contentinfo">
  <div class="page-level-wrapper">
  <?php print render($page['footer']); ?>
  </div>
</footer>
</div><!--/container -->