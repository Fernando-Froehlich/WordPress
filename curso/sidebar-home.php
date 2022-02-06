<?php if( is_active_sidebar( 'sidebar-1') ): ?>
    <aside class="sidebar col-md-4 h-100">
    <label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
    <button type="submit" class="search-submit"><?php echo _x( 'OK', ' button' ); ?></button>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>
<?php endif; ?>    
