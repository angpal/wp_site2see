<div id="searchForm" style="color:#000;">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <label class="screen-reader-text" for="search_input"></label>
        <input type="search" id="search_input" class="search-field" placeholder="<?php echo esc_attr_x('Search topics..', 'placeholder', 'variant-landing-page-four'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'variant-landing-page-four'); ?></span></button>
    </form>
</div>