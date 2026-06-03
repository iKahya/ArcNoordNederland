<?php
/*
Template Name: Contact
*/
get_header();
?>

<section class="max-w-3xl mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6">Contact</h1>

    <p class="mb-4">Heb je vragen? Neem contact op!</p>

    <form class="space-y-4">
        <input type="text" placeholder="Naam" class="w-full border p-2">
        <input type="email" placeholder="Email" class="w-full border p-2">
        <textarea placeholder="Bericht" class="w-full border p-2"></textarea>

        <button class="bg-blue-600 text-white px-4 py-2">
            Versturen
        </button>
    </form>

</section>

<?php get_footer(); ?>