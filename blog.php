<?php get_header();
//Template Name: Blog
?>
<main id="blog">
<section id="heroblog">
    <?php $thumb = get_the_post_thumbnail_url(); ?>
    <div style="background-image: url('<?php echo $thumb;?>')"></div>
    <?php the_content(); ?>
</section>
<div class="container">
<h2><?php the_title()?></h2>
<section id="allarticles">
<!-- affiche 8 extraits d'article -->
<?php
$recentPosts = new WP_Query();
$recentPosts->query('showposts=8');
?>
<!-- fin affiche 8 extraits d'article -->
<!-- boucle wordpress pour afficher les extraits d'article -->
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<!-- permet d'afficher un extrait d'article -->
<p><?php the_excerpt(); ?></p>
<!-- fin permet d'afficher un extrait d'article -->
<!-- permet d'afficher la date de publication -->
<p id="date"><?php the_time('j/n/Y'); ?></p>
<!-- fin permet d'afficher la date-->
<?php endwhile;?>
</section>
</div>
</main>
<?php get_footer(); ?>