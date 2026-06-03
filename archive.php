<?php get_header(); ?>

<section class="max-w-6xl mx-auto p-6">

    <!-- Titel -->
    <h1 class="text-3xl font-bold mb-6">
        <?php single_cat_title(); ?>
    </h1>

    <!-- Categorie filter -->
    <?php
    $categories = get_categories();
    $current_category = get_queried_object_id();
    ?>

    <div class="flex flex-wrap gap-2 mb-6">

        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"
           class="px-4 py-2 border rounded <?php if (!is_category()) echo 'bg-blue-600 text-white'; ?>">
            Alles
        </a>

        <?php foreach ($categories as $category) : ?>

            <?php
            $active = ($current_category == $category->term_id)
                ? 'bg-blue-600 text-white'
                : 'hover:bg-gray-100';
            ?>

            <a href="<?php echo get_category_link($category->term_id); ?>"
               class="px-4 py-2 border rounded <?php echo $active; ?>">
                <?php echo $category->name; ?>
            </a>

        <?php endforeach; ?>

    </div>

    <!-- Posts -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/components/card', 'post'); ?>

        <?php endwhile; else : ?>
            <p>Geen posts gevonden.</p>
        <?php endif; ?>

    </div>

    <!-- Pagination -->
    <?php
    $links = paginate_links([
        'total' => $wp_query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'type' => 'array'
    ]);

    if ($links) :
    ?>
    <div class="flex justify-center mt-10">
        <ul class="flex space-x-2">

            <?php foreach ($links as $link) : ?>
                <li>
                    <?php
                    $active = strpos($link, 'current') !== false
                        ? 'bg-blue-600 text-white border-blue-600'
                        : 'bg-white text-black';

                    echo str_replace(
                        'page-numbers',
                        'px-4 py-2 border rounded hover:bg-gray-100 ' . $active,
                        $link
                    );
                    ?>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
    <?php endif; ?>

</section>

<?php get_footer(); ?>