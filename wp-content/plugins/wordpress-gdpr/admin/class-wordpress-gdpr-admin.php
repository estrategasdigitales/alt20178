<?php

class WordPress_GDPR_Admin extends WordPress_GDPR
{
    protected $plugin_name;
    protected $version;

    /**
     * Construct GDPR Admin Class
     * @author Daniel Barenkamp
     * @version 1.0.0
     * @since   1.0.0
     * @link    http://plugins.db-dzine.com
     * @param   string                         $plugin_name
     * @param   string                         $version
     */
    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Load Extensions
     * @author Daniel Barenkamp
     * @version 1.0.0
     * @since   1.0.0
     * @link    http://plugins.db-dzine.com
     * @return  boolean
     */
    public function load_extensions()
    {
        // if((!is_user_logged_in() || !is_admin()) && !is_multisite()){
        //     return false;
        // }

        // Load the theme/plugin options
        if (file_exists(plugin_dir_path(dirname(__FILE__)).'admin/options-init.php')) {
            require_once plugin_dir_path(dirname(__FILE__)).'admin/options-init.php';
        }
        return true;
    }

    /**
     * Init
     * @author Daniel Barenkamp
     * @version 1.0.0
     * @since   1.0.0
     * @link    http://plugins.db-dzine.com
     * @return  boolean
     */
    public function init()
    {

        global $wordpress_gdpr_options;
        $this->options = $wordpress_gdpr_options;
    }

    public function reorder_menu_items()
    {
        global $submenu;

        if(isset($submenu['wordpress_gdpr_options_options'])) {
            
            $service_categories = $submenu['wordpress_gdpr_options_options'][0];
            $users = $submenu['wordpress_gdpr_options_options'][1];
            $requests = $submenu['wordpress_gdpr_options_options'][2];
            $services = $submenu['wordpress_gdpr_options_options'][3];
            $settings = $submenu['wordpress_gdpr_options_options'][4];
            $object = $submenu['wordpress_gdpr_options_options'][5];
            $import = $submenu['wordpress_gdpr_options_options'][6];

            $submenu['wordpress_gdpr_options_options'] = array(
                0 => $requests,
                1 => $services,
                2 => $service_categories,
                3 => $settings,
                4 => $users,
                5 => $object,
                6 => $import,
            );

        }

        return $submenu;
    }

    public function menu_highlight( $parent_file ){ 

        global $current_screen;

        $taxonomy = $current_screen->taxonomy;
        
        if ( $taxonomy == 'gdpr_service_categories' ) {
            $parent_file = 'wordpress_gdpr_options_options';
        }

        return $parent_file; 
    }   

}