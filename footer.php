<footer class="bg-[linear-gradient(to_right,#000000_0%,#EA048C_49%,#000000_100%)] mt-20">
    <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- LOGO -->
        <div class="logo w-32 md:w-40 h-auto">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } ?>
        </div>

        <!-- NAV / LINKS -->
        <div>
            <h3 class="font-bold mb-4">Navigatie</h3>
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'space-y-2',
            ]);
            ?>
        </div>

        <!-- SOCIALS -->
        <div>
            <h3 class="font-bold mb-4">Volg ons</h3>

            <div class="flex space-x-4">
                <a href="#" class="hover:text-blue-400">Facebook</a>
                <a href="#" class="hover:text-pink-400">Instagram</a>
                <a href="#" class="hover:text-blue-300">Twitter</a>
            </div>
        </div>

    </div>

    <div class="text-center text-sm py-4 border-t border-gray-700">
        © <?php echo date('Y'); ?> MijnBlog
    </div>

    <?php wp_footer(); ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>