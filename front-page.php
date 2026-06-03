<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php get_template_part('template-parts/components/hero'); ?>

<?php endwhile; endif; ?>

<?php
$query = new WP_Query([
    'posts_per_page' => 6
]);

if ($query->have_posts()) :
?>

<section class="max-w-6xl mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr">

        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part('template-parts/components/card', 'post'); ?>
        <?php endwhile; ?>

    </div>
</section>

<?php else : ?>
    <p class="p-6">Geen posts gevonden.</p>
<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>