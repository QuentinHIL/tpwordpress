<?php get_header();
//Template name: Canada
?>
<main>
    <section id="herocanada">
        <?php $thumb = get_the_post_thumbnail_url(); ?>
        <div style="background-image: url('<?php echo $thumb; ?>')"></div>
    </section>
    <section class="regions">
    <p class="reg"><?php the_field('nom_de_region'); ?></p>
    <?php
        $image = get_field('image_de_la_region');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
            echo wp_get_attachment_image($image, $size);
        } 
    ?>
    <p class="prov">Province: <?php the_field('province'); ?></p>
    <p class="cap">Capitale: <?php the_field('capitale'); ?></p>
    </section>
    <section class="regions">
    <p class="reg"><?php the_field('nom_de_region_deux'); ?></p>
    <?php
        $image = get_field('image_de_la_region_deux');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
            echo wp_get_attachment_image($image, $size);
        } 
    ?>
    <p class="prov">Province: <?php the_field('province_deux'); ?></p>
    <p class="cap">Capitale: <?php the_field('capitale_deux'); ?></p>
    </section>
    <section class="regions">
    <p class="reg"><?php the_field('nom_de_region_trois'); ?></p>
    <?php
        $image = get_field('image_de_la_region_trois');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
            echo wp_get_attachment_image($image, $size);
        } 
    ?>
    <p class="prov">Province: <?php the_field('province_trois'); ?></p>
    <p class="cap">Capitale: <?php the_field('capitale_trois'); ?></p>
    </section>
    <section class="regions">
    <p class="reg"><?php the_field('nom_de_region_quatre'); ?></p>
    <?php
        $image = get_field('image_de_la_region_quatre');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
            echo wp_get_attachment_image($image, $size);
        } 
    ?>
    <p class="prov">Province: <?php the_field('province_quatre'); ?></p>
    <p class="cap">Capitale: <?php the_field('capitale_quatre'); ?></p>
    </section>
    <section class="regions">
    <p class="reg"><?php the_field('nom_de_region_cinq'); ?></p>
    <?php
        $image = get_field('image_de_la_region_cinq');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
            echo wp_get_attachment_image($image, $size);
        } 
    ?>
    <p class="prov">Province: <?php the_field('province_cinq'); ?></p>
    <p class="cap">Capitale: <?php the_field('capitale_cinq'); ?></p>
    </section>
</main>

<?php get_footer(); ?>