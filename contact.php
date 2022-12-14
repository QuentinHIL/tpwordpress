<?php get_header();
//Template Name: Contact
?>

<main>
    <section id="herocontact">
        <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div style="background-image: url('<?php echo $thumb; ?>')"></div>
    </section>
    <section id="formulaire">
    <?php the_content(); ?>
    </section>
    <section id="cartecanada">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41289548.80927969!2d-130.11782872211322!3d50.82905111995382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sfr!2sfr!4v1670497892840!5m2!1sfr!2sfr" width="600px" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>

<?php get_footer(); ?>