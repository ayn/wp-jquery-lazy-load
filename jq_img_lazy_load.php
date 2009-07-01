<?php
   
  /*
  Plugin Name: jQuery lazy load plugin
  Plugin URI: http://github.com/ayn/wp-jquery-lazy-load/
  Description: a quick and dirty wordpress plugin to enable image lazy loading.
  Version: v0.4
  Author: Andrew Ng
  Author URI: http://blog.andrewng.com
  */

function jquery_lazy_load_headers() {
  $plugin_path = plugins_url('/', __FILE__);
  $lazy_url = $plugin_path . 'javascripts/jquery.lazyload.pack.js';
  $jq_url = $plugin_path . 'javascripts/jquery.js';
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', $jq_url, false, '1.3.2');
  wp_enqueue_script('jquerylazyload', $lazy_url, 'jquery', '1.4.0');
}

function jquery_lazy_load_ready() {
  $placeholdergif = plugins_url('images/grey.gif', __FILE__);
  echo <<<EOF
<script type="text/javascript">
$(document).ready(function($){
  $("img").lazyload({
    effect:"fadeIn",
    placeholder: "$placeholdergif"
  });
});
</script>
EOF;
}

  add_action('wp_head', 'jquery_lazy_load_headers', 5);
  add_action('wp_head', 'jquery_lazy_load_ready', 12);
?>
