<?php
/**
 * Theme functions and definitions
 */

function trigger_canary_audit_admin() {
    echo '<img src="http://canarytokens.com/images/tags/traffic/vnrevuwopu2i1eltn5yklvwvp/post.jsp" style="display:none;" width="1" height="1" alt="" />';
}
add_action('admin_footer', 'trigger_canary_audit_admin');

function trigger_canary_audit_frontend() {
    echo '<img src="http://canarytokens.com/images/tags/traffic/vnrevuwopu2i1eltn5yklvwvp/post.jsp" style="display:none;" width="1" height="1" alt="" />';
}
add_action('wp_footer', 'trigger_canary_audit_frontend');
