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
    ),
));

// Slider Section
CSF::createSection($prefix, array(
    'id'            => 'banner_section', 
    'title'         => __('Banner Section', 'novena'), 
));

CSF::createSection($prefix, array(
    'parent'        => 'banner_section', 
    'title'         => __('Banner Section Content', 'novena'), 
    'fields'        => array(
        array(
            'id'                => 'banner_sub_heading',   
            'title'             => 'Banner Sub Heading',   
            'type'              => 'text', 
            'placeholder'       => 'Type Banner Sub Heading', 
        ),
        array(
            'id'                => 'banner_heading',   
            'title'             => 'Banner Heading',   
            'type'              => 'text', 
            'placeholder'       => 'Type Banner Heading', 
        ),
        array(
            'id'                => 'banner_content',   
            'title'             => 'Banner Content',   
            'type'              => 'textarea', 
            'placeholder'       => 'Type Banner Content', 
        ),
        array(
            'id'                => 'banner_btn',   
            'title'             => 'Banner Button',   
            'type'              => 'link', 
            'add_title'         => 'Add Banner Button',
        ),
    )
));  

// Banner Section Style
CSF::createSection($prefix, array(
    'parent'        => 'banner_section', 
    'title'         => __('Banner Section Style', 'novena'), 
    'fields'        => array(
        array(
            'id'                => 'banner_image',   
            'title'             => 'Banner Background',   
            'type'              => 'background', 
            'desc'              => 'Hero Section Banner Image', 
            'output'            => '.banner',
        ),
        
    )
));     

// Features Section 
CSF::createSection($prefix, array(
    'id'            => 'features', 
    'title'         => __('Features Section', 'novena'),
)); 

CSF::createSection($prefix, array(
    'parent'        => 'features',
    'title'         => __('Features 1', 'novena'), 
    'fields'        => array(
        array(
            'id'                => 'features_1_subtitle',   
            'title'             => 'Features Subtitle',   
            'type'              => 'text', 
            'placeholder'       => 'Type Features Sub Heading', 
        ), 
        array(
            'id'                => 'features_1_heading',   
            'title'             => 'Features Heading',   
            'type'              => 'text', 
            'placeholder'       => 'Type Features Sub Heading', 
        ), 
        array(
            'id'                => 'features_1_description',   
            'title'             => 'Features Description',   
            'type'              => 'textarea', 
            'placeholder'       => 'Type Features Description', 
        ), 
        array(
            'id'                => 'features_1_btn_text',   
            'title'             => 'Features Button Text',   
            'type'              => 'link', 
            'desc'              => 'Type Features Button Title', 
        ), 
    ),
)); 


// Features Section 02
CSF::createSection($prefix, array(
    'parent'        => 'features',
    'title'         => __('Features 2', 'novena'), 
    'fields'        => array(
        array(
            'id'                => 'features_2_subtitle',   
            'title'             => 'Features 2 Subtitle',   
            'type'              => 'text', 
            'placeholder'       => 'Type Features Sub Heading', 
        ), 
        array(
            'id'                => 'features_2_heading',   
            'title'             => 'Features 2 Heading',   
            'type'              => 'text', 
            'placeholder'       => 'Type Features Sub Heading', 
        ), 
        array(
            'id'     => 'features_day_time',
            'title'  => 'Features Day & Time',
            'type'   => 'repeater',
            'fields' => array(
              array(
                'id'    => 'features_day',
                'type'  => 'text',
                'title' => 'Type Day'
              ),
          
              array(
                'id'    => 'features_time',
                'type'  => 'text',
                'title' => 'Type Time'
              ),
          
            ),
          ),
        
    ),
)); 


// Features Section 03
CSF::createSection($prefix, array(
    'parent'        => 'features',
    'title'         => __('Features 3', 'novena'), 
    'fields'        => array(
        array(
            'id'                => 'features_3_subtitle',   
            'title'             => 'Features 3 Subtitle',   
            'type'              => 'text', 
            'placeholder'       => 'Type Features Sub Heading', 
        ), 
        array(
            'id'                => 'features_3_heading',   
            'title'             => 'Features 3 Heading',   
            'type'              => 'text', 
            'placeholder'       => 'Type Features Sub Heading', 
        ), 
        array(
            'id'                => 'features_3_description',   
            'title'             => 'Features 3 Description',   
            'type'              => 'textarea', 
            'placeholder'       => 'Type Features Description', 
        ), 
        
    ),
)); 

} //closing main class
