<form method="GET" class="form-inline tm-mb-80 tm-search-form" action='<?php echo esc_url( home_url( '/' ) ); ?>'>
    <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search"
        id="<?php echo $unique_id; ?>" name="s" value="<?php the_search_query(); ?>">
    <button class="tm-search-button" type="submit">
        <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
    </button>
</form>