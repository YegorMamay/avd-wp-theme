<form class="navbar-form main-search" role="search" method="get"  id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="main-search__input" type="search" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php // _e('Search', 'brainworks') ?>">
    <button class="main-search__button btn-search" type="submit" id="searchsubmit">
        <i class="fal fa-search"></i>
    </button>
</form>
