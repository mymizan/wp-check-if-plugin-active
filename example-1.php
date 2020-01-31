/** 
 * Don't forget to set your prefix.
 */ 
function prefix_is_plugin_active( $plugin_main_file ) {

	// get the list of plugins.
	$active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

	// escape characters that have special meaning in regex.
	$plugin_main_file = preg_quote( $plugin_main_file, '/' );
	$is_plugin_installed = false;

	// Loop through the active plugins.
	foreach( $active_plugins as $plugin ) {
	    if( preg_match( '/.+\/' . $plugin_main_file . '/', $plugin ) ) {
		$is_plugin_installed = true;
		break;
	    }
	}

	return $is_plugin_installed;
}
