<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<?php layerslider(3); ?>
<div class="container">
    <section class="about-section">
        <h2 class="main-title h3"><?php echo get_post_meta(get_the_ID(), 'about_title', true); ?></h2>
        <div class="about-section__row">
            <div class="about-section__col">
                <div class="about-section__title">
                    <?php echo get_post_meta(get_the_ID(), 'about_second_title', true); ?>
                </div>
                <div class="about-section__description">
                    <?php echo get_post_meta(get_the_ID(), 'about_description', true); ?>
                    <div class="about-section__bg-text"><?php echo pll_e('Text-about'); ?></div>
                </div>
                <a class="btn btn-primary link-button"
                   href="<?php echo get_field('about_url'); ?>"><?php echo get_post_meta(get_the_ID(), 'about_link', true); ?>
                    &gt;</a>
            </div>
            <div class="about-section__col">
                <?php
                $attachment_elem_id = get_post_meta(get_the_ID(), 'about_image', true);
                $about_image = wp_get_attachment_url($attachment_elem_id);
                ?>
                <img class="about-section__image" src="<?php echo $about_image; ?>" alt="image">
            </div>
        </div>
    </section>
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
                            <a class="tab-catalog__image-wrapper" href="<?php echo $value['catalog_item_link']; ?>">
                                <img class="tab-catalog__image" src="<?php echo $value['catalog_item_image']; ?>">
                            </a>
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
</div>
<?php
$attachment_advantages = get_post_meta(get_the_ID(), 'advantages_image', true);
$advantages_image = wp_get_attachment_url($attachment_advantages);
?>
<div class="block-advantages" style="background: url('<?php echo $advantages_image; ?>') no-repeat center / cover">
    <div class="container">
        <h2 class="main-title main-title--white h3"><?php echo get_post_meta(get_the_ID(), 'advantages_title', true); ?></h2>
        <div class="block-advantages__wrapper">
            <div class="block-advantages__caption">
                <div class="block-advantages__title"><?php echo get_post_meta(get_the_ID(), 'advantages_second_title', true); ?></div>
                <div class="block-advantages__item-wrapper">
                    <?php $advantages_item = get_field('advantages_list'); ?>
                    <?php foreach ($advantages_item as $content) { ?>
                        <div class="block-advantages__item">
                            <img class="block-advantages__icon" src="<?php echo $content['advantages_icon']; ?>"
                                 alt="icon">
                            <div class="block-advantages__item-text"><?php echo $content['advantages_text']; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="middle-block">
    <div class="container">
        <div class="middle-block__wrapper">
            <div class="middle-block__title h3"><?php echo get_post_meta(get_the_ID(), 'partners_title', true); ?></div>
            <div class="middle-block__row">
                <?php $partners_list = get_field('partners_list'); ?>
                <?php foreach ($partners_list as $content) { ?>
                    <div class="middle-block__logo-wrapper">
                        <img class="middle-block__logo" src="<?php echo $content['partners_logo']; ?>" alt="logo">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
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
    <div class="block-contacts">
        <h2 class="block-contacts__title h3"><?php echo get_post_meta(get_the_ID(), 'contacts_title', true); ?></h2>
        <div class="block-contacts__wrapper">
            <div class="block-contacts__section">
                <div class="block-contacts__field">
                    <div class="block-contacts__icon-wrapper">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="block-contacts__content">
                        <?php echo get_post_meta(get_the_ID(), 'facebook_text', true); ?>
                    </div>
                </div>
                <div class="block-contacts__field">
                    <div class="block-contacts__icon-wrapper">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="block-contacts__content">
                        <?php echo do_shortcode('[bw-phone]'); ?>
                    </div>
                </div>
                <div class="block-contacts__field">
                    <?php
                    $address = get_theme_mod('bw_additional_address');
                    if (!empty($address)) { ?>
                        <div class="block-contacts__icon-wrapper">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="block-contacts__content">
                            <?php echo pll_e('Address'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
