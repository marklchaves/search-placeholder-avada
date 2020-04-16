<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://caughtmyeye.cc
 * @since      1.0.0
 *
 * @package    Search_Placeholder_Avada
 * @subpackage Search_Placeholder_Avada/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="search-placeholder-avada_options" action="options.php">
        <?php
        // Grab all options
        $options = get_option($this->plugin_name);

        $custom_text = 
            (empty($options['custom-text'])) ? 'Search Placeholder Avada' : $options['custom-text'];

        ?>
        <?php
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
        ?>

        <!-- Input Field for Search Placeholder Text -->
        <fieldset>
            <legend class="screen-reader-text">
                <span>Search Placeholder Avada text</span>
            </legend>
            <label for="<?php echo $this->plugin_name; ?>-custom-text">
                <span>
                    <?php esc_attr_e('Search Placeholder Avada text', $this->plugin_name); ?>
                </span>
                <input type="text" id="<?php echo $this->plugin_name; ?>-custom-text" name="<?php echo $this->plugin_name; ?>[custom-text]" value="<?php echo $custom_text; ?>" />
            </label>
        </fieldset>

        <?php submit_button('Save all changes', 'primary', 'submit', TRUE); ?>

    </form>

</div>