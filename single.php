<?php get_header(); ?>

<section class="max-w-3xl mx-auto p-6">

    <!-- Terug naar blog -->
    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" 
       class="text-blue-600 mb-4 inline-block">
       ← Terug naar blog
    </a>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Titel -->
        <h1 class="text-3xl font-bold mb-4">
            <?php the_title(); ?>
        </h1>

        <!-- Meta -->
        <p class="text-gray-500 mb-4">
            <?php the_author(); ?> • <?php echo get_the_date(); ?>
        </p>

        <!-- Content -->
        <div class="prose max-w-none">
            <?php the_content(); ?>
        </div>

        <!-- Categorieën -->
        <div class="mt-6">
            <span class="font-semibold">Categorieën:</span>
            <?php the_category(', '); ?>
        </div>

        <!-- Volgende / vorige post -->
        <div class="flex justify-between mt-10">

            <div>
                <?php previous_post_link('%link', '← Vorige'); ?>
            </div>

            <div>
                <?php next_post_link('%link', 'Volgende →'); ?>
            </div>

        </div>

    <?php endwhile; else : ?>
        <p>Geen posts gevonden.</p>
    <?php endif; ?>

</section>

<?php get_footer(); ?>