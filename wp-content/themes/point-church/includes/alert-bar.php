<?php


class AlertBarPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        // This page will be under "Settings"
        add_options_page(
            'Alert Bar Admin', 
            'Alert Bar Settings', 
            'manage_options', 
            'alert-bar-admin', 
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'alert_bar_setting' );
        ?>
        <div class="wrap">
            <h2>Alert Bar Settings</h2>           
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'alert_bar_option_group' );   
                do_settings_sections( 'alert-bar-admin' );
                submit_button(); 
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {        
        register_setting(
            'alert_bar_option_group', // Option group
            'alert_bar_setting'//, // Option name
           // array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'alert-bar-setting-section', // ID
            'Activate and Populate Alert Bar', // Title
            array( $this, 'print_section_info' ), // Callback
            'alert-bar-admin' // Page
        );  

        add_settings_field(  
            'activate-alert-bar',  
            'Activate Alert Bar',  
            array( $this, 'alert_bar_active_checkbox' ),  
            'alert-bar-admin',  
            'alert-bar-setting-section'  
        );
        
        add_settings_field(
            'alert-bar-content', 
            'Content for Alert', 
            array( $this, 'alert_content_callback' ), 
            'alert-bar-admin', 
            'alert-bar-setting-section'
        );  

        add_settings_field(
            'alert-bar-url',
            'URL for Alert',
            array( $this, 'alert_url_callback' ),
            'alert-bar-admin',
            'alert-bar-setting-section'
        );    
    }

    /** 
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Enter your settings below:';
    }


    public function alert_bar_active_checkbox() {
        
        $html = '<input type="checkbox" id="checkbox" name="alert_bar_setting[checkbox]" value="1"' . checked( $this->options['checkbox'], 1, false ) . '/>';
        $html .= '<label for="alert_bar_setting[checkbox]">Show the alert bar.</label>';
        
        echo $html;
        
        }

    /** 
     * Get the settings option array and print one of its values
     */
    public function alert_content_callback()
    {
        printf(
            '<textarea id="title" cols="35" name="alert_bar_setting[text]">%s</textarea>',
            isset( $this->options['text'] ) ? esc_attr( $this->options['text']) : ''
        );
    }

    public function alert_url_callback()
    {
        $html = '<input type="url" size="35" id="url" name="alert_bar_setting[url]" value="' . $this -> options['url'] . '" />';
        $html .= '<label for="alert_bar_setting[url]">Format example: http://www.google.com</label>';
        
        echo $html;
    }
}

if( is_admin() )
    $my_settings_page = new AlertBarPage();

?>