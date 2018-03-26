<?php
/**
 * The template for displaying search forms in scout-base
 *
 * @package scout-base
 */
?>
	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'scout-base' ); ?></label>
		<input type="search" class="field search-form" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'scout-base' ); ?>" />
		<button type="submit" class="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'scout-base' ); ?>" /><span class="glyphicon glyphicon-search"></span></button>
	</form>
