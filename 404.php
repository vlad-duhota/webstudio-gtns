<?php
/*
Template Name: Thank page
*/
?>

<?php get_header(); ?>

<main style="margin-top: auto; margin-bottom: auto; text-align: center;">
    <div class="container">
        <img src="<?php echo esc_url()?>/assets/images/error.png" alt="">
        <h1 class="page__title" style="color: var(--accent-color); margin-bottom: 10px">Вибачте, сторінка яку ви шукаєте не існує</h1>
        <p class="page__text" style="font-size: 20px; color: var(--light-text)">Перевірте адресу сайту</p>
    </div>
</main>

<?php get_footer(); ?>