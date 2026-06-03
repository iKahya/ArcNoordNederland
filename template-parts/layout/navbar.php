<header class="bg-yellow-300 shadow">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- LOGO -->
        <div class="logo w-32 md:w-40 h-auto">
            <?php
            if (function_exists('the_custom_logo') && has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <a href="<?php echo home_url(); ?>" class="text-xl font-bold">MijnBlog</a>
            <?php } ?>
        </div>

        <!-- DESKTOP MENU -->
        <nav class="hidden md:flex space-x-6">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex space-x-6',
                'fallback_cb' => false,
            ]);
            ?>
        </nav>

        <!-- HAMBURGER BUTTON -->
        <button id="menu-toggle" class="md:hidden focus:outline-none">
            <div class="space-y-1">
                <span class="block w-6 h-0.5 bg-black"></span>
                <span class="block w-6 h-0.5 bg-black"></span>
                <span class="block w-6 h-0.5 bg-black"></span>
            </div>
        </button>

    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden px-6 pb-4 md:hidden flex flex-col space-y-2">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'flex flex-col space-y-2',
            'fallback_cb' => false,
        ]);
        ?>
    </div>
</header>