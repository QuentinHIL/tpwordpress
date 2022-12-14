<?php get_header();
//Template name: Index
?>

<main>
    <section id="herohome">
        <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div style="background-image: url('<?php echo $thumb;?>')"></div>
    </section>
    <?php the_content(); ?>
    <div class="cont">
        <div class="container"><a href="<?php echo get_permalink('2'); ?>">Visit Canada !</a></div>
        <div class="container"><a href="<?php echo get_permalink('29'); ?>">About Us </a></div>
    </div>
    <div class="cont">
        <div class="container"><a href="<?php echo get_permalink('8'); ?>">News/Blog</a></div>
        <div class="container"><a href="<?php echo get_permalink('12'); ?>">Contact Us !</a></div>
    </div>
</main>

<?php get_footer(); ?>