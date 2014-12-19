<!Doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" >
    
    <?php wp_head(); ?>
    <script src="//use.typekit.net/vqa0rpv.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
</head>

<body>
    <header>
        <a href="<?php echo get_option('home'); ?>" class="header-a">
        <h1 class="header-a-h1">Bella Italia<br /><span class="header-a-h1-span">NONSENSE TRAVEL AGENCY</span></h1>
        </a>

        <nav class="header-nav" role="navigation">
            <ul class="header-nav-ul">
                <?php wp_list_pages('title_li'); ?>
            </ul>
        </nav>
    </header>
