<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(':',TRUE,'right'); bloginfo('name'); ?></title>
    <meta name="keywords" content="zine, zines, mctc, minneapolis, library alternative">
    <meta name="author" content="MCTC Library Zine Collection, site designed by Zach Bucek Studio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <style type="text/css">
        #zine_container{display:none;}
        .zineID{display:none;}
    </style>

<!--DATATABLES STYLES CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<!--INILINE STYLES-->
    <style>
        * {
            box-sizing: border-box;
        }

        select:focus {
            border: 1px solid #75ffca !important;
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

        .sidebar ul {
            list-style: none;
        }
        .sidebar .screen-reader-text {
            display: none;
        }
        .sidebar ul li a:hover {
            text-decoration: underline;
            color: #A214CC;
        }
        .sidebar a {
            color: #A214CC;
        }
        .sidebar,
        .sidebar .widget-title {
            font-family: Abel, sans-serif;
        }
        .sidebar h1 {
            font-family: Lekton, sans-serif;
            font-size: 28px;
        }
        .sidebar,
        .postform,
        #s,
        #searchsubmit,
        #archives-dropdown-3 {
            font-family: Abel, sans-serif;
            font-size: inherit;
        }

        dl.dropdowns button {
            margin: 0 0 .5em 0;
            padding: .5em 0 1.5em 2em;
            text-transform: none;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: dashed thin black;
            border-radius: 0;
            background-color: transparent;
            padding-left: 0.125em;
            cursor: pointer;
            color: black;
            font-weight: normal;
            font-style: normal;
            font-size: 26px;
            font-family: Abel, sans-serif;
        }
        dl dd {
            margin: 0;
            padding: 0;
        }
        dl.dropdowns .description {
            display: none;
            margin: 0;
            padding: 1em 2em 0 2em;
        }
        dl.dropdowns button:hover,
        dl.dropdowns button:focus {
            color: #ffb200;
        }

        .static-page h2,
        .static-page-search h2 {
            font-size: 32px;
        }

        .static-page h3,
        .static-page-search h3 {
            font-size: 24px;
        }

        .static-page p,
        .static-page-search p {
            padding-bottom: 15px;
            margin: 0;
            font-size: 24px;
        }

        .static-page label,
        .static-page-search label {
            font-size: 28px;
        }

        .static-page li {
            font-size: 22px;
        }

        .static-page article,
        .static-page-search article {
            font-family: Abel, sans-serif;
        }

        /* STATIC INTERIOR PAGES - LINKS */
        .static-page a,
        .static-page-search a {
            color: #A214CC;
        }

        .static-page a:hover,
        .static-page-search a:hover {
            text-decoration: underline;
            color: #A214CC;
        }

        p#donate-address {
            padding: 1em 0 0 1em;
            color: black;
        }

        /* STATIC PAGES - SEARCH */
        .static-page-search h2 {
            margin-left: .5em;
        }

        .static-page-search .subject-list,
        .static-page-search .genre-list {
            font-size: 22px;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container container-search">

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

