<!DOCTYPE html>
<head <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title><?php the_title(); ?> </title>
<?php wp_head(); ?>
</head>
<body>
<header>
<div><i class="fa-brands fa-canadian-maple-leaf"></i></div>
<div id="menuordi">
    <?php
    wp_nav_menu(array(
    'menu' => 'Menu principal',
    'container' => 'nav'
    ));
    ?>
</div>
</header>