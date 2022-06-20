<?php
// @package aspataltheme
//     =======================
//     Footer Settings Page
//     =======================
?>

<h1>Footer Settings</h1>

<?php settings_errors(); ?>

<form action="options.php" method="post" class="aspatal-footer-form">
    <?php settings_fields( 'aspatal-footer-settings' ); ?>
    <?php do_settings_sections( 'aspatal_footer' ); ?>
    <?php submit_button(); ?>
</form>