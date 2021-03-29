<?php

function learnwp_customizer($wp_customize)
{
    //Copyright
    $wp_customize->add_section('sec_copyright', array(
        'title'=>'Copyright',
        'description' => 'Please, type here your copyright'
    ));

    $wp_customize->add_setting('set_copyright', array(
        'type' => 'theme_mod',
        'default' =>'Copyright X - All Right Reserved',
        'sanitize_callback' =>'esc_attr'
    ));

    $wp_customize->add_control('ctrl_copyright', array(
        'label' => 'Copyright Information',
        'description'=>'Please, type your copyright here.',
        'section'=>'sec_copyright',
        'settings'=>'set_copyright',
        'type'=>'text'
    ));


    // Map
    $wp_customize-> add_section('sec_map', array(
        'title' => __('Map', 'learnwp'),
        'description' => __('The Map Section', 'learnwp')
    ));

    // API Key
    $wp_customize-> add_setting('set_map_apikey', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_attr'
    ));

    $wp_customize-> add_control('ctrl_map_apikey', array(
        'label' => __('Google Maps API Key', 'learnwp'),
        'description' => sprintf(__('Get your key <a target="_blank" href="%s">here</a>', 'learnwp'), 'https://console.developers.google.com/flows/enableapi?apiid=maps_backend'),
        'section' => 'sec_map',
        'settings' => 'set_map_apikey',
        'type' => 'text'
    ));

    // Map Address
    $wp_customize-> add_setting('set_map_address', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_textarea'
    ));

    $wp_customize-> add_control('ctrl_map_address', array(
        'label' => __('Type your address here', 'learnwp'),
        'description' => __('No special characters allowed', 'learnwp'),
        'section' => 'sec_map',
        'settings' => 'set_map_address',
        'type' => 'textarea'
    ));
}

add_action('customize_register', 'learnwp_customizer');
