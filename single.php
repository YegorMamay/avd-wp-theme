<?php get_header(); ?>

<div class="container">

    <div class="<?php echo $column_class; ?>">
            <?php if (!is_front_page() && function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
            <?php get_template_part('loops/content', 'single'); ?>
    </div>
</div>

<?php get_footer(); ?>
