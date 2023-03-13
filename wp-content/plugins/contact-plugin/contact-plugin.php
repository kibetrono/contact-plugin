<?php
/**
 * Plugin Name: Contact Plugin 
 * Plugin URI: https://www.elegantthemes.com/blog/wordpress/best-wordpress-contact-form-plugins?utm_source=Blog&utm_medium=Pillar%20Posts&utm_campaign=Google%20Search&retargeting=off&gclid=Cj0KCQiAjbagBhD3ARIsANRrqEu3yMaJhSzrmLgQiOiLhpR5mjAQIaHblG7HlK5R3aOap2g86KPa0dYaApTvEALw_wcB
 * Description: Plugin to manage the wordpress contacts
 * Version: 1.7.0
 * Author: David Rono
 * License: GPLv2 or later
 */

//  secure the files
if(!defined("ABSPATH")){
    die('No script kiddies please!');
}

// check if plugin exists first

if (!class_exists("SWKEContactPlugin")){

    class SWKEContactPlugin{
        
    }
}