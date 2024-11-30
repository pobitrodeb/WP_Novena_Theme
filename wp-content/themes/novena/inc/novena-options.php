<?php 
if(class_exists('CSF')){
    $prefix = 'novena-options'; 
    
CSF::createOptions($prefix, array(
    'menu_title'        => __('Novena Options', 'novena'),
    'menu_slug'         => 'novena-options',
    'framework_title'   => __('Novena Options'), 
));

CSF::createSection($prefix, array(
    'id'                => 'header_section', 
    'title'             => __('Header Section', 'novena'), 
   
)); 

CSF::createSection($prefix, array(
    'parent'            => 'header_section', 
    'title'             => __('Header Information', 'novena'), 
    'fields'            => array(
        array (
            'id'        => 'header_email', 
            'title'     => __('Header Email', 'novena'), 
            'type'      => 'text', 
            'placeholder' => __('Type your support email'), 
        ), 
        array (
            'id'        => 'header_address', 
            'title'     => __('Header Address', 'novena'), 
            'type'      => 'text',  
        ), 
        array (
            'id'        => 'header_phone_text', 
            'title'     => __('Header Phone Title', 'novena'), 
            'type'      => 'text',  
        ), 
        array (
            'id'        => 'header_phone_number', 
            'title'     => __('Header Phone Number', 'novena'), 
            'type'      => 'text',  
        ), 
    )
));

} //closing main class
