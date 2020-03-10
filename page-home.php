<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<?php /*
$attachment_elem_id = get_post_meta(get_the_ID(), 'first_screen_image', true);
$attachment_image = wp_get_attachment_url($attachment_elem_id);
*/ ?>
<?php // $content_top = get_field('first_screen_content'); ?>
<?php /* <section class="top-section" style="background: rgba(0, 0, 0, 0.7) url('<?php echo $attachment_image; ?>') no-repeat center / cover">
<div class="container">
    <div class="top-section__caption">
        <h1 class="top-section__title h1"><?php echo $content_top['first_screen_title']; ?></h1>
        <div class="top-section__description"><?php echo $content_top['first_screen_description']; ?></div>
        <button class="btn btn-primary"><?php echo $content_top['first_screen_button']; ?></button>
    </div>
</div>
</section>
 */ ?>
<?php layerslider(3); ?>
<div class="container">
    <section class="review-container">
        <h2 class="main-title h3"><?php echo pll_e('Text-reviews-title'); ?></h2>
        <img class="review__decor-image" src="/wp-content/themes/avd-wp-theme/assets/img/leaf-clean-1.png" alt="image">
        <?php echo do_shortcode('[bw-reviews] '); ?>
        <img class="review__image" src="/wp-content/themes/avd-wp-theme/assets/img/kurica.png" alt="image">
    </section>
    <section class="article-section">
        <h2 class="main-title h3"><?php echo pll_e('News-title'); ?></h2>
    </section>
    <?php echo do_shortcode('[bw-advert count=3 class=front-news]'); ?>
<?php get_template_part('loops/content', 'home'); ?>

</div><!-- /.container -->
<?php get_footer(); ?>
