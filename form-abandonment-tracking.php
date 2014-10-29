<?php
/**
 * Plugin Name: Form Abandonment Tracking
 * Plugin URI: http://webwizards.net/wordpress/
 * Description: Tracks form abandonment to the form field level as Google Analytics events, including Submits.
 * Version: 1.1
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
//      console.log('Form Abandonment Tracking - Detected: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                if (typeof ga !== 'undefined') {
                    ga('send', 'event', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name'));
                    console.log('Form Abandonment Tracking - GA Universal in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                 }
                //check if _gaq is set too
                if (typeof _gaq !== 'undefined') {
                    _gaq.push(['_trackEvent', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name')]);
                    console.log('Form Abandonment Tracking - Google Analytics in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                }
  });
  $('form').find(':input').click(function() {
    if(this.type && this.type.toLowerCase() === 'submit') {
      inputAction = 'submitted';
//          console.log('Form Abandonment Tracking - Submit clicked: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                if (typeof ga !== 'undefined') {
                    ga('send', 'event', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name'));
                    console.log('Form Abandonment Tracking - GA Universal in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                 }
                //check if _gaq is set too
                if (typeof _gaq !== 'undefined') {
                    _gaq.push(['_trackEvent', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name')]);
                    console.log('Form Abandonment Tracking - Google Analytics in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                }
    }
 });
 });
})(jQuery);
</script>
<!-- End Form Abandonment Tracker -->

<?php }
add_action('wp_footer', 'form_tracker', 200);
?>