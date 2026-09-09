<?php
// Standalone regression tests: no database or WordPress installation required.
define( 'ABSPATH', __DIR__ );
$hooks = array();
$feed = false;
$can_activate = true;
$wp_version = '5.5';

function add_action( $hook, $callback, $priority = 10 ) {
	global $hooks;
	$hooks[$hook] = $callback;
}
function add_filter( $hook, $callback, $priority = 10 ) {
	add_action( $hook, $callback, $priority );
}
function is_feed() { global $feed; return $feed; }
function current_user_can( $capability ) { global $can_activate; return $can_activate; }
function __( $text, $domain ) { return $text; }
function esc_html( $text ) { return htmlspecialchars( $text, ENT_QUOTES, 'UTF-8' ); }
function plugins_url( $path, $file ) { return 'https://example.test/plugins/lazy' . $path; }

set_error_handler( function( $severity, $message, $file, $line ) {
	throw new ErrorException( $message, 0, $severity, $file, $line );
} );
function check( $condition, $message ) {
	if ( ! $condition ) { throw new RuntimeException( $message ); }
}

require dirname( __DIR__ ) . '/jq_img_lazy_load.php';

foreach ( array( '5.5', '5.5.1', '6.2', '7.1' ) as $wp_version ) {
	$hooks = array();
	$plugin = new jQueryLazyLoad();
	check( array_keys( $hooks ) === array( 'admin_notices' ), 'Modern WordPress must register no frontend hooks: ' . $wp_version );
	ob_start();
	call_user_func( $hooks['admin_notices'] );
	$notice = ob_get_clean();
	check( strpos( $notice, 'deactivate and delete' ) !== false, 'Missing retirement guidance.' );
	$can_activate = false;
	ob_start();
	$plugin->retirement_notice();
	check( ob_get_clean() === '', 'Non-administrators must not receive the notice.' );
	$can_activate = true;
}

foreach ( array( '2.8', '4.0', '5.4.99' ) as $wp_version ) {
	$hooks = array();
	$plugin = new jQueryLazyLoad();
	check( count( $hooks ) === 5 && ! isset( $hooks['admin_notices'] ), 'Legacy hooks not preserved.' );
	foreach ( array( '<img src="photo.jpg" alt="Photo">', '<img class="existing" src="photo.jpg" alt="Photo">' ) as $input ) {
		$output = $plugin->filter_the_content( $input );
		check( strpos( $output, 'data-original="photo.jpg"' ) !== false, 'Original source lost.' );
		check( strpos( $output, 'class="lazy ' ) !== false, 'Lazy class missing.' );
		check( strpos( $output, '<noscript>' . $input . '</noscript>' ) !== false, 'Fallback lost.' );
	}
	$feed = true;
	check( $plugin->filter_the_content( $input ) === $input, 'Feed changed.' );
	$feed = false;
	check( $plugin->filter_the_content( '<p>No image</p>' ) === '<p>No image</p>', 'Plain content changed.' );
}
echo "All retirement and legacy regression tests passed.\n";
