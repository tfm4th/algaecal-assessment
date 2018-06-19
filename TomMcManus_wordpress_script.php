// include jQuery separate from the core
// de-register theh core then enqueue the new to avoid both versions loading
function include_jquery_version() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://www.algaecal.com/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'include_jquery_version');