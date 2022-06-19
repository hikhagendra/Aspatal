<h1>General Settings</h1>

<?php settings_errors(); ?>

<form action="options.php" method="post" class="aspatal-general-form">
    <?php settings_fields( 'aspatal-settings-group' ); ?>
    <?php do_settings_sections( 'lama_aspatal' ); ?>
    <?php submit_button(); ?>
</form>