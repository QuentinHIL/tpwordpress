<?php get_header();
?>
<main id="actu">
<!-- boucle wordpress -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article id="seul">
<div id="titre"><?php the_title(); ?></div>
<!-- affiche le contenu -->
<div id="contenu"><?php the_content(); ?></div>
<!-- fin affiche le contenu -->
<!-- affiche l'image mise en avant -->
<?php the_post_thumbnail($size='large');?>
<!-- fin affiche l'image mise en avant -->
<span>Auteur: <span><?php the_author();?></span></span>
<span>Publié le: <span><?php the_time('j F, Y'); ?></span></span>
</article>
<?php endwhile; ?>
<?php endif; ?>
<!-- fin boucle wordpress -->
</main>