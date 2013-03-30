<?php
/**
 * The Header for the CFFC theme
 *
 * Displays all of the <head> section and everything up till
<div id="main">
*
* @package WordPress
* @subpackage Twenty_Eleven
* @since Twenty Eleven 1.0
*/
?>

<!DOCTYPE html>

<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html
<?php language_attributes(); ?>>
<!--<![endif]-->
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width">

    <title>

        <?php
	/*
	 * Print the <title> tag based on what is being viewed.
        */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

        ?>
    </title>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    <!-- don't know why i need this -->

    <link rel="stylesheet" type="text/css"
          href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/smoothness/jquery-ui.css">

    <!-- end tim modification -->

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to add elements to
<head> such
    * as styles, scripts, and meta tags.
    */
    wp_head();
    ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>

    <script type="text/javascript" src="/wp-content/themes/crossfit_fallschurch_theme/basic.js"></script>

    <script src="/wp-content/themes/crossfit_fallschurch_theme/jquery.nivo.slider.pack.js"
            type="text/javascript"></script>

    <script type="text/javascript" src="//use.typekit.net/kma6wiy.js"></script>
    <script type="text/javascript">try {
        Typekit.load();
    } catch (e) {
    }</script>

    <!-- THE FONT I NEED -->
    <link href='http://fonts.googleapis.com/css?family=Jura:600,400' rel='stylesheet' type='text/css'>
    <!-- /END FONT -->

</head>

<body class="Text TextMedium">

<div class="SiteHeader Text TextSmall LayoutBreakAfter">

    <div id="SiteLogo">
        <a href="/" style="border:none;"><img src="/wp-content/themes/crossfit_fallschurch_theme/CFFC_Logo/top_logo.png"></a>
        <!-- <a href="/" style="border:none;"><img src="/wp-content/themes/crossfit_fallschurch_theme/CFFC_Logo/top-bar_for_page.png"></a> -->
    </div>

    <div class="SiteHeaderBar" id="shBar">
        <div class="SiteHeaderDropdownLink SiteHeaderBarItem SiteHeaderBarItemFirst" id="introduction_panel">
           <a href="/fall-2013-plan/" class="SiteHeaderBarLink">Future</a>
        </div>

        <div class="SiteHeaderDropdownLink SiteHeaderBarItem" id="schedule_panel">
            <a href="/schedule/" class="SiteHeaderBarLink">Schedule</a>
        </div>

        <div class="SiteHeaderDropdownLink SiteHeaderBarItem" id="general_info_panel">
            <a href="/general_info/" class="SiteHeaderBarLink">Introduction</a>
        </div>

        <div class="SiteHeaderDropdownLink SiteHeaderBarItem" id="about_us_panel">
            <a href="/about_us/" class="SiteHeaderBarLink">About Us</a>
        </div>

    </div><!-- site header bar -->

</div><!-- SiteHeader -->
