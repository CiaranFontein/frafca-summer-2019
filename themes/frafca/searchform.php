<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <a href='javascript:;' class="search-button" aria-hidden=true>
        <i class="fa fa-search"></i>
    </a>

    <label class="search-label">
        <input type="search" class="search-field" placeholder="Search"
            value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search results for:" />
    </label>
</form>