<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body class="black">
<?php get_header(); ?>

<?php the_content(); ?>

<?php
    $intPostUID = get_post(179);
    $strContent = $intPostUID->post_content;
?>
<div class="container_flex">
    <video class="main_video" autoplay muted loop poster="https://healthyvending.ru/wp-content/uploads/2020/12/main.png">
        <source src="https://healthyvending.ru/wp-content/uploads/2020/12/main2.mp4" type="video/mp4">
        Тег video не поддерживается вашим браузером.
    </video>
</div>
<div class="container_flex_mobile">
    <div class="main_mobile"></div>
    <div class="main_phone">+7 985 649 98 89</div>
</div>
</body>
</html>