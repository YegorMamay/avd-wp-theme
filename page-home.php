<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<?php layerslider(3); ?>
<div class="container">
    <?php
    $tabs = get_field('tab_list');
    $tabs_content = get_field('tab_items');
    $count_tabs = 1;
    $count_tab_content = 1; ?>
    <div class="tab-catalog">
        <h2 class="main-title h3"><?php echo get_post_meta(get_the_ID(), 'tab_title', true); ?></h2>
        <div class="tab-catalog__caption">
            <?php foreach ($tabs as $content) { ?>
                <div class="tab-catalog__title <?php echo $count_tabs == 1 ? ' active' : '' ?>"
                     data-tab="tab_<?php echo $count_tabs ?>"><?php echo $content['tab_title']; ?></div>
                <?php $count_tabs++; ?>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
        <div class="tab-catalog__content">
            <?php foreach ($tabs as $content) { ?>
                <div class="tab-catalog__container <?php echo $count_tab_content == 1 ? ' active' : '' ?>"
                     id="tab_<?php echo $count_tab_content ?>">
                    <?php foreach ($content['tab_items'] as $value) { ?>
                        <div class="tab-catalog__item">
                            <img class="tab-catalog__image" src="<?php echo $value['catalog_item_image']; ?>">
                            <a class="tab-catalog__link" href="<?php echo $value['catalog_item_link']; ?>">
                                <?php echo $value['catalog_item_title']; ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <?php $count_tab_content++; ?>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
        <?php
        $file = get_field('price');
        if ($file): ?>
            <div class="tab-catalog__button-wrapper">
                <a class="btn btn-primary btn-download" href="<?php echo $file['url']; ?>" download>
                    <?php echo get_post_meta(get_the_ID(), 'price_title', true); ?>
                    <svg class="icon-download">
                        <use xlink:href="#icon_download"></use>
                    </svg>
                </a>
            </div>
        <?php endif; ?>
    </div>
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
