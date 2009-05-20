<?php
   
  /*
  Plugin Name: jQuery lazy load plugin
  Plugin URI: 
  Version: v0.1
  Author: <a href="http://blog.andrewng.com/">Andrew Ng</a>
  Description: 
  */

function jquery_lazy_load_headers() {
  $plugin_path = plugins_url('/jq-lazy-load/');
  $lazy_url = $plugin_path . 'javascripts/jquery.lazyload.pack.js';
  $jq_url = $plugin_path . 'javascripts/jquery.js';
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', $jq_url, false, '1.3.2');
  wp_enqueue_script('jquerylazyload', $lazy_url, 'jquery', '1.4.0');
}

function jquery_lazy_load_ready() {
  $placeholdergif = plugins_url('/jq-lazy-load/images/grey.gif');
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
