<?php

return [

    'name' => 'theme-iexist',

    'type' => 'theme',

    /**
     * Resources
     */
    'resources' => [

        'theme:' => '',
        'views:' => 'views'

    ],

    /**
     * Menu positions
     */
    'menus' => [

        'main' => 'Main',
        'offcanvas' => 'Offcanvas',
		'footer' => 'Footer'

    ],

    /**
     * Widget positions
     */
    'positions' => [

        'navbar' => 'Navbar',
		'navbar_more' => 'Navbar More',
	    'header_search' => 'Header Search',
	    'header_social' => 'Header Social',
		'header_info' => 'Header Info',
        'hero' => 'Hero',
        'top' => 'Top A',
		'top_b' => 'Top B',
		'top_c' => 'Top C',
		'top_d' => 'Top D',
		'breadcrumbs' => 'Breadcrumbs',
        'sidebar' => 'Sidebar',
        'bottom' => 'Bottom A',
		'bottom_b' => 'Bottom B',
		'bottom_c' => 'Bottom C',
		'bottom_d' => 'Bottom D',
        'bottom_offset' => 'Bottom Offset',
        'footer' => 'Footer Main',
        'footer_left' => 'Footer Left',
        'footer_right' => 'Footer Right',
        'offcanvas' => 'Offcanvas',
        'fixed_bar' => 'Fixed Bar',
		'smoothscroll' => 'Smoothscroll'

    ],

    /**
     * Node defaults
     */
    'node' => [

        'title_hide' => false,
        'title_large' => false,
        'alignment' => '',
        'html_class' => '',
        'sidebar_first' => false,
        'hero_image' => '',
        'hero_style' => 'uk-block-default',
        'hero_blend' => '',
        'hero_width' => false,
        'hero_viewport' => '',
        'hero_contrast' => '',
        'hero_parallax' => '',
        //'top_style' => 'uk-block-muted',
		//'main_style' => 'uk-block-default',
		'image_alt_enable' => false,
		'image_alt' => '',
		'image_alt_style' => '',
		'image_alt_blend' => '',
        'contrast_alt' => '',
		
		'top_block_bg' => 'uk-block-default',
		'top_block_padding' => '',
		'top_container_width' => 'uk-container uk-container-center',
		'top_block_divider' => false,
		'top_block_contrast' => false,
		
		'top_b_block_bg' => 'uk-block-default',
		'top_b_block_padding' => '',
		'top_b_container_width' => 'uk-container uk-container-center',
		'top_b_block_divider' => false,
		'top_b_block_contrast' => false,
		
		'top_c_block_bg' => 'uk-block-default',
		'top_c_block_padding' => '',
		'top_c_container_width' => 'uk-container uk-container-center',
		'top_c_block_divider' => false,
		'top_c_block_contrast' => false,
		
		'top_d_block_bg' => 'uk-block-default',
		'top_d_block_padding' => '',
		'top_d_container_width' => 'uk-container uk-container-center',
		'top_d_block_divider' => false,
		'top_d_block_contrast' => false,
		
		'main_block_bg' => 'uk-block-default',
		'main_block_padding' => '',
		'main_container_width' => 'uk-container uk-container-center',
		'main_block_divider' => false,
		'main_block_contrast' => false,
		
		'bottom_block_bg' => 'uk-block-default',
		'bottom_block_padding' => '',
		'bottom_container_width' => 'uk-container uk-container-center',
		'bottom_block_divider' => false,
		'bottom_block_contrast' => false,
		
		'bottom_b_block_bg' => 'uk-block-default',
		'bottom_b_block_padding' => '',
		'bottom_b_container_width' => 'uk-container uk-container-center',
		'bottom_b_block_divider' => false,
		'bottom_b_block_contrast' => false,
		
		'bottom_c_block_bg' => 'uk-block-default',
		'bottom_c_block_padding' => '',
		'bottom_c_container_width' => 'uk-container uk-container-center',
		'bottom_c_block_divider' => false,
		'bottom_c_block_contrast' => false,
		
		'bottom_d_block_bg' => 'uk-block-default',// uk-contrast',
		'bottom_d_block_padding' => '',
		'bottom_d_container_width' => 'uk-container uk-container-center',
		'bottom_d_block_divider' => false,
		'bottom_d_block_contrast' => false,
		
		'footer_block_bg' => 'uk-block-default',// uk-contrast',
		'footer_block_padding' => '',
		'footer_container_width' => 'uk-container uk-container-center',
		'footer_block_divider' => false,
		'footer_block_contrast' => false,

        //'footer_style' => 'uk-block-secondary uk-contrast'
    ],

    /**
     * Widget defaults
     */
    'widget' => [

        'title_hide' => false,
        'title_size' => 'uk-panel-title',
        'alignment' => '',
        'html_class' => '',
        'panel' => 'uk-panel-box'

    ],

    /**
     * Settings url
     */
    'settings' => '@site/settings#site-theme',

    /**
     * Configuration defaults
     */
    'config' => [

        'logo_contrast' => '',
        'logo_offcanvas' => '',
        'image' => '',
        'contrast' => '',
        'style' => '',
        'header_layout' => 'default',
        'header_sticky' => 'animated',
        'footer_layout' => 'centered',
        'footer_fixed' => true,
		'breadcrumbs' => false,
        'totop_scroller' => true,
        'chess_blog' => true

    ],

    /**
     * Events
     */
    'events' => [

        'view.system/site/admin/settings' => function ($event, $view) use ($app) {
            $view->script('site-theme', 'theme:app/bundle/site-theme.js', 'site-settings');
            $view->data('$theme', $this);
        },

        'view.system/site/admin/edit' => function ($event, $view) {
            $view->script('node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
        },

        'view.system/widget/edit' => function ($event, $view) {
            $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
        },

        /**
         * Custom markup calculations based on theme settings
         */
		 
		'view.meta' => [function ($event, $meta) use ($app) {

            $meta->add('description', $meta->get('og:description'));

        }, -20],
		
        'view.layout' => function ($event, $view) use ($app) {

            if ($app->isAdmin()) {
                return;
            }

            $params = $view->params;

            $classes = [
                'navbar' => 'tm-navbar',
                'hero' => '',
				'image-alt' => '',
                'parallax' => ''
            ];

            // Sticky from warp
            $sticky = [];
            if ($params['header_sticky'] == 'sticky') {
                $sticky['media'] = 767;
            }

            if ($params['header_sticky'] == 'animated') {
                //$classes['header'] = 'tm-navbar-wrapper-animate';
                $sticky['media'] = 767;
                //$sticky['top'] = -250;
                //$sticky['clsinactive'] = 'tm-navbar-wrapper';
				$sticky['showup'] = 'true';
                $sticky['animation'] = 'uk-animation-slide-top';
            }

            if (count($sticky)) {
                $classes['sticky'] = 'data-uk-sticky=\''.json_encode($sticky).'\'';
            }

            if ($params['hero_viewport']) {
                $classes['hero'] = 'tm-hero-height';
            }

            if ($params['hero_parallax'] && $view->position()->exists('hero') && $params['hero_image']) {
                $classes['parallax'] = 'data-uk-parallax="{bg: \'-400\'}"';//250
            }

            if ($params['hero_contrast'] && $params['hero_image']) {
                $classes['hero'] .= ' uk-contrast';
            }

            if ($params['hero_style']) {
                $classes['hero'] .= ' '.$params['hero_style'];
            }

            if ($params['image_alt_style']) {
                $classes['image-alt'] = ' '.$params['image_alt_style'];
            }

            if ($params['image_alt_blend'] && $params['image_alt']) {
                $classes['image-alt'] .= ' tm-background-blend-'.$params['image_alt_blend'];
            }
			

            if ($params['contrast_alt'] && $params['image_alt']) {
                $classes['image-alt'] .= ' uk-contrast';
            }

            $classes['sticky'] = 'data-uk-sticky=\''.json_encode($sticky).'\'';
			
			
			
			// body classes
            if ($params['header_layout'] == 'centered') {
                $classes['body'][] = 'tm-navbar-centered-true';
            }

            if ($params['header_sticky']) {
                $classes['body'][] = 'tm-navbar-sticky';
            }

            if ($params['footer_fixed']) {
                $classes['body'][] = 'tm-footer-fixed';
            }

            if (!$view->position()->exists('hero')) {
                $classes['body'][] = 'tm-header-offset';
            }

            if (key_exists('body', $classes)) {
                $classes['body'] = sprintf('class="%s"', trim(implode(' ', $classes['body'])));
            }
			

            $params['classes'] = $classes;
        },

        'view.system/site/widget-menu' => function ($event, $view) {

            if ($event['widget']->position == 'navbar') {
                $event->setTemplate('menu-navbar.php');
            }

        }

    ]

];
