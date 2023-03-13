<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('after_setup_theme','load_carbon_fields');
add_action('carbon_fields_register_fields','create_options_page');

function load_carbon_fields()
{
    // require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

function create_options_page(){
    Container::make( 'theme_options', __( 'Contact Form' ) )
    ->set_icon('dashicons-media-default')
    ->add_fields( array(
        // Field::make( 'text', 'crb_facebook_url', __( 'Facebook URL' ) ),
        // Field::make( 'textarea', 'crb_footer_text', __( 'Footer Text' ) )

        Field::make( 'checkbox', 'contact_plugin_active', 'Active' ),
        Field::make( 'text', 'contact_plugin_receipients', 'Receiptient Email' )->set_attribute( 'placeholder', 'receipient email' )->set_help_text("This is the receipient email address."),
        Field::make( 'textarea', 'contact_plugin_confirmation_message', 'Confirmation Message' )->set_attribute( 'placeholder', 'confirmation message' )->set_help_text("This is the message that the receipient will receive."),

    ) );
}