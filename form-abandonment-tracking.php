<?php
/**
 * Plugin Name: Form Abandonment Tracking
 * Plugin URI: http://webwizards.net/wordpress/
 * Description: Tracks form abandonment to the form field level as Google Analytics events, including Submits.
 * Version: 1.0
 * Author: Web Wizards
 * Author URI: http://webwizards.net/wordpress/
 * License: GPL2
 */

function form_tracker() {
?>
<!-- Form Abandonment Tracker -->
<script type="text/javascript">
(function($) {
 $(document).ready(function() {
  $('form').find(':input').blur(function() {
    if (this.value === this.defaultValue) {
	var inputAction = 'skipped';
    } else {
	var inputAction = this.value ? 'completed' : 'skipped';
    }
    if(this.type && this.type.toLowerCase() === 'submit') {
      inputAction = 'submitted';
    }
    //alert('tracking form: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
    _gaq.push(['_trackEvent', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name')]);
  });
 });
})(jQuery);
</script>
<!-- End Form Abandonment Tracker -->

<?php }
add_action('wp_footer', 'form_tracker', 21);
?>