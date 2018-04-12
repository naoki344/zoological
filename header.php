<!DOCTYPE html>
<html lang="ja">
<head>
    <?php wp_head(); ?>
    <script>
        $(function () {
            $("#graphic").SlideShow({slideSpeed: 2000, fadeSpeed: 500});
            $("#pagetop").moveTopPage({scrollSpeed: 100});
            $("#down_menu").dropDownMenu({dropSpeed: 100});

        });
    </script>
</head>

<body>
<header>
    <h1><a href="<?php echo home_url(); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="ZOO LOGICAL"/></a></h1>



<?php if ( has_nav_menu( 'primary' ) ) : ?>
<nav class="nav-global">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary'
    ) );
    ?>
</nav>
<?php endif; ?>

</header>

