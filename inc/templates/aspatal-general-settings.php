<?php
// @package aspataltheme
//     =======================
//     General Settings Page
//     =======================
?>

<h1>General Settings</h1>

<?php settings_errors(); ?>

<form action="options.php" method="post" class="aspatal-general-form">
    <?php settings_fields( 'aspatal_general_settings' ); ?>
    <?php do_settings_sections( 'lama_aspatal' ); ?>
    <?php submit_button(); ?>
</form>