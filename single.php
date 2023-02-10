<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
    <h1>Это страница для конкретной записи</h1>
    <?php the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p class="author"><?php the_date(); ?>, <?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '32' ); } ?> <?php the_author(); ?> - <?php comments_number(); ?><p>
    <p><?php the_content(); ?></p>
<?php
    the_post_navigation(
        array(
            'next_text' => '<span>' . __('Next') . '</span>',
            'prev_text' => '<span>' . __('Previous') . '</span>'
        )
    );
?>
<?php
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
?>
<?php
    get_footer();
?>
</body>
</html>