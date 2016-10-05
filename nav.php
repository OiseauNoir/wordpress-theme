<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url') ?>">
              <?php bloginfo('title') ?>
            </a>
        </div>

        <?php wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'bs-example-navbar-collapse-1',
          'menu_class' => 'nav navbar-nav navbar-right'
         ) ); ?>
    </div>
    <!-- /.container -->
</nav>
