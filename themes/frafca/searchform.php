<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

    <label class="search-label">
        <input type="search" class="search-field" placeholder="Search"
            value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search results for:"
            autocomplete="off" />
    </label>
    <button class="search-button"></button>
</form>