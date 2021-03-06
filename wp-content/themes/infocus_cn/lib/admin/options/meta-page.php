<?php

$meta_boxes = array(
	'title' => sprintf( __( '%1$s General Page Options', MYSITE_ADMIN_TEXTDOMAIN ), THEME_NAME ),
	'id' => 'mysite_page_meta_box',
	'pages' => array( 'page' ),
	'callback' => '',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => __( 'Layout', MYSITE_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'You can choose between a left, right, or no sidebar layout for your page.', MYSITE_ADMIN_TEXTDOMAIN ),
			'id' => '_layout',
			'options' => array(
				'full_width' => THEME_ADMIN_ASSETS_URI . '/images/footer_column/1.png',
				'left_sidebar' => THEME_ADMIN_ASSETS_URI . '/images/footer_column/fourth_threefourth.png',
				'right_sidebar' => THEME_ADMIN_ASSETS_URI . '/images/footer_column/threefourth_fourth.png',
			),
			'default' => 'right_sidebar',
			'type' => 'layout'
		),
		array(
			'name' => __( 'Custom Sidebar', MYSITE_ADMIN_TEXTDOMAIN ),
			'desc' => __( "Select the custom sidebar that you'd like to be displayed on this page.<br /><br />Note:  You will need to first create a custom sidebar under the &quot;Sidebar&quot; tab in your theme's option panel before it will show up here.", MYSITE_ADMIN_TEXTDOMAIN ),
			'id' => '_custom_sidebar',
			'target' => 'custom_sidebars',
			'type' => 'select'
		),
		array(
			'name' => __( 'Disable Breadcrumbs', MYSITE_ADMIN_TEXTDOMAIN ),
			'desc' => __( "Here you can disable breadcrumbs on a page by page basis.  Alternatively you can globally disable breadcrumbs under the &quot;General Settings&quot; tab in your theme's option panel.", MYSITE_ADMIN_TEXTDOMAIN ),
			'id' => '_disable_breadcrumbs',
			'options' => array( 'true' => __( 'Check to disable breadcrumbs on this page', MYSITE_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),
		array(
			'name' => __( 'Intro Options', MYSITE_ADMIN_TEXTDOMAIN ),
			'desc' => __( "This is the text that displays at the beginning of your pages and posts.<br /><br />Note:  You can set the default behaviour in the &quot;General Settings&quot; tab in your theme's option panel.", MYSITE_ADMIN_TEXTDOMAIN ),
			'id' => '_intro_text',
			'options' => array(
				'default' => sprintf( __( 'Default Intro <small><a targe href="%1$s/wp-admin/admin.php?page=mysite-options" target="_blank">(click here to edit your default intro settings)</a></small>', MYSITE_ADMIN_TEXTDOMAIN ), esc_url( get_option('siteurl') ) ),
				'title_only' => __( 'Title Only', MYSITE_ADMIN_TEXTDOMAIN ),
				'title_teaser' => __( 'Title & Teaser Text', MYSITE_ADMIN_TEXTDOMAIN ),
				'title_tweet' => __( 'Title & Latest Tweet', MYSITE_ADMIN_TEXTDOMAIN ),
				'custom' => __( 'Custom Raw Html', MYSITE_ADMIN_TEXTDOMAIN ),
				'disable' => __( 'Completely Disable Intro', MYSITE_ADMIN_TEXTDOMAIN )
			),
			'toggle' => 'toggle_true',
			'default' => 'default',
			'type' => 'radio'
		),
		array(
			'name' => __( 'Teaser Text', MYSITE_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'The teaser text is the text that displays beside your title in your intro.', MYSITE_ADMIN_TEXTDOMAIN ),
			'id' => '_intro_custom_text',
			'toggle_class' => '_intro_text_title_teaser',
			'type' => 'textarea'
		),
		array(
			'name' => __( 'Custom Raw Html', MYSITE_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'In case you have some custom HTML you wish to display in the intro then you may insert it here.', MYSITE_ADMIN_TEXTDOMAIN ),
			'id' => '_intro_custom_html',
			'toggle_class' => '_intro_text_custom',
			'type' => 'textarea'
		)
	)
);
return array(
	'load' => true,
	'options' => $meta_boxes
);

?>