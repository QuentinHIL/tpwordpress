<?php get_header();
//Template name: About
?>

<main>
    <section id="heroabout">
            <?php $thumb = get_the_post_thumbnail_url(); ?>
            <div style="background-image: url('<?php echo $thumb;?>')"></div>
    </section>
    <section id="blocpresentation">
        <?php the_content(); ?>
    </section>
</main>

<?php get_footer(); ?>