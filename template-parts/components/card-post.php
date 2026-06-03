<div class="bg-white shadow rounded overflow-hidden flex flex-col h-full">

    <!-- image -->
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover']); ?>
    <?php endif; ?>

    <!-- content -->
    <div class="p-4 flex flex-col flex-grow">

        <span class="text-sm text-blue-500">
            <?php the_category(', '); ?>
        </span>

        <h2 class="font-montserrat text-xl font-bold"><?php the_title(); ?></h2>

        <p class="text-sm text-gray-500">
            <?php the_author(); ?> • <?php echo get_the_date(); ?>
        </p>

        <p class="mt-2">
            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
        </p>

        <!-- 👇 MAGIC -->
        <div class="mt-auto pt-4 pb-2">
            <a href="<?php the_permalink(); ?>" class="text-blue-600 font-medium hover:underline">
                Lees meer →
            </a>
        </div>

    </div>

</div>