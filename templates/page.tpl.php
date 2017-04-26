      <!-- The page -->
  <div class="hamburger-menu"><a href="#menu-original"><div class="bar"></div></a></div>
<div class="site-wrapper">

<header class="site-header <?php if(empty ($page['preface']) ): ?>no-preface<?php endif; ?> " role="banner">

  <div class="wrap">
    <div class="logo">
        <?php print render($page['logo']); ?>
        <h1 class="site-name"><a href="/" title="Home">McMurdo Dry Valleys History</h1></a>
    </div>

    <?php if ($page['header']): ?>
    <div class="header-blocks">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  
  <div class="top-nav-container">
  <?php if ($page['topnav']): ?>
    <nav class="main-nav" id="menu" role="navigation">
      <?php print render($page['topnav']); ?>
    </nav>
  <?php endif; ?>
</div>


  </div>
</header>
  <?php if ($page['main_nav']): ?>

<div class="main-nav-container">
    <nav class="main-nav wrap" id="menu" role="navigation">
      <?php print render($page['main_nav']); ?>
    </nav>
</div>
  <?php endif; ?>


<?php if ($page['search']): ?>
  <div class="search-region cleafix">
    <div class="wrap">
      <?php print render($page['search']); ?>
    </div>
    </div>
<?php endif; ?>

  <?php if ($page['breadcrumbs']): ?>
    <div class="breadcrumbs">
      <?php print render($page['breadcrumbs']); ?>
    </div>
  <?php endif; ?>

  <div class="preface cleafix">
    <div class="wrap">
      <?php print render($page['preface']); ?>
    </div>
    </div>

<!-- Close Preface -->
<main id="content" class="<?php if(empty ($page['preface']) ): ?>no-preface<?php endif; ?> ">
  <div class="wrap">

    <?php if ($page['help']): ?>
    <div class="help-section">
        <?php print render($page['help']); ?>
        </div>
    <?php endif; ?>


    <?php if ($page['sidebar_first']): ?>
      <aside class="sidebar-first" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <div class="main-content-wrap">

       <?php if (!empty($title)): ?>
        <h1 class="pagetitle"><?php print $title; ?></h1>
      <?php endif; ?>

    <?php if ($page['content']): ?>
        <?php print render($page['content']); ?>
    <?php endif; ?>
    </div>

    <?php if ($page['sidebar_second']): ?>
      <aside class="sidebar-second" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>

    <?php if ($page['postscript']): ?>
      <div class="postscript">
        <?php print render($page['postscript']); ?>
      </div>
    <?php endif; ?>

  </div>
</main>

  <footer class="site-footer">
            <p class="copy">&copy; Copyright <?php echo date("Y"); ?></p>

      <div class="wrap">
        <?php print render($page['footer']); ?>
      </div>
  </footer>
</div>
