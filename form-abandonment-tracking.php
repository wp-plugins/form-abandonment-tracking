<?php
/**
 * Plugin Name: Form Abandonment Tracking
 * Plugin URI: http://presswizards.com/wordpress/
 * Description: Tracks form abandonment to the form field level as Google Analytics events, including Submits.
 * Version: 1.2
 * Author: Press Wizards
 * Author URI: http://presswizards.com/wordpress/
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
                // compatible with post-5.0 Yoast Universal GA code
                if (typeof __gaTracker !== 'undefined') {
                    __gaTracker('send', 'event', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name'));
                //    console.log('Form Abandonment Tracking - __gaTracker Universal in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                }
                //check if _gaq is set too
                if (typeof _gaq !== 'undefined') {
                    _gaq.push(['_trackEvent', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name')]);
                //    console.log('Form Abandonment Tracking - Google Analytics in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                }
                // compatible with pre-5.1 Yoast GA code, for sites that are neglected lol
                if (typeof ga !== 'undefined') {
                    ga('send', 'event', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name'));
                //    console.log('Form Abandonment Tracking - Orig Universal in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                }
  });
  $('form').find(':input').click(function() {
    if(this.type && this.type.toLowerCase() === 'submit') {
      inputAction = 'submitted';
                // compatible with post-5.0 Yoast Universal GA code
                if (typeof __gaTracker !== 'undefined') {
                    __gaTracker('send', 'event', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name'));
                //    console.log('Form Abandonment Tracking - __gaTracker Universal in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                }
                //check if _gaq is set too
                if (typeof _gaq !== 'undefined') {
                    _gaq.push(['_trackEvent', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name')]);
                //    console.log('Form Abandonment Tracking - Google Analytics in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
                }
                // compatible with pre-5.1 Yoast GA code, for sites that are neglected lol
                if (typeof ga !== 'undefined') {
                    ga('send', 'event', (this.form.id || 'form-without-id'), inputAction, $(this).attr('name'));
                //    console.log('Form Abandonment Tracking - Orig Universal in use, sent: ' + (this.form.id || 'form-without-id') + ' Label: ' + this.name + ' Action: ' + inputAction);
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