<?php $ih = Core::make('helper/image'); ?>
<?php $c = Page::getCurrentPage(); ?>

<!doctype html>
<html lang="nl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php Loader::element('header_required'); ?>
  <link href="<?php echo $view->getThemePath(); ?>/dist/css/style.css?v=1.3" type="text/css" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="<?php echo $view->getThemePath(); ?>/assets/images/favicon.png" />
 <!-- <link rel="stylesheet" href="//basehold.it/25"> -->
 <?php $u = new User(); if ($u->isLoggedIn() !== true) { ?>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
 <?php } ?>
</head>

<body>

  <div class="<?= $c->getPageWrapperClass() ?>">
    <div class="page__wrap">

        <header class="header">

            <nav class="navbar">
                <span class="navbar-toggle" id="js-navbar-toggle">
                    <i class="fas fa-bars"></i>
                </span>
                <a href="#" class="logo">logo</a>
                <ul class="main-nav" id="js-menu">
                    <li>
                        <a href="#" class="nav-links">Home</a>
                    </li>
                    <li>
                        <a href="#" class="nav-links">Products</a>
                    </li>
                    <li>
                        <a href="#" class="nav-links">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="nav-links">Contact Us</a>
                    </li>
                    <li>
                        <a href="#" class="nav-links">Blog</a>
                    </li>
                </ul>
            </nav>

        </header>