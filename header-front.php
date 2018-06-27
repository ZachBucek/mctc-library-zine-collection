<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(':',TRUE,'right'); bloginfo('name'); ?></title>
    <meta name="keywords" content="zine, zines, mctc, minneapolis, library alternative">
    <meta name="author" content="MCTC Library Zine Collection, site designed by Zach Bucek Studio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<!--INLINE STYLES-->
    <style>
        * {
            box-sizing: border-box;
        }

        select:focus {
            border: solid #75ffca;
        }

        a {
            text-decoration: none;
        }
        .main-nav {
            background-color: #ffb200;
            display: block;
            margin-bottom: 90px;
            max-height: 15px;
        }
        .main-nav ul {
            margin: 0;
            padding-left: 60px;
        }

        .main-nav ul li {
            border-bottom: hidden;
            list-style-type: none;
            float: left;
            margin: 0;
            color: black;
            padding: 10px 56px 0 0;
            font: 24px Abel, sans-serif;
        }

        .main-nav ul li a {
            text-decoration: none;
            color:black;
        }

        .main-nav a:hover {
            color: white;
            background: black;
            text-decoration: none;
        }

        .main-nav a.selected {
            border-bottom: solid black 1px;
        }

        #postTitle,
        #postTitle-single {
            font-family: Lekton, sans-serif;
            font-size: 40px;
        }
    </style>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">

    <!--START MOBILE images-->
    <header id="mobile-header" class="row">
        <div class="twelve columns">
            <a href="https://www.mctclibraryzines.com"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/zc_logo_mobile.svg" id="mobileLogo" alt="MCTC Library Zine Collection"></a>
        </div>
    </header>
    <div class="row">
        <nav id="mobile-menu" class="twelve columns"></nav>
    </div>
    <!--END MOBILE images-->

    <!--HEADER-->
    <header id="desktop-header" class="row">
        <div class="twelve columns" id="logoDiv">
            <a href="https://www.mctclibraryzines.com"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/zc_logo.svg" alt="MCTC Library Zine Collection"></a>
        </div>
    </header>


