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

<?php the_content(); ?>

<?php
    $intPostUID_1 = get_post(214);
    $strContent_1 = $intPostUID_1->post_content;
?>

<div class="before_header_1 container_flex">
    <div class="container_grid">
        <div class="champion_box" align="center">
            <?php echo $strContent_1; ?>
        </div>
    </div>
</div>
<div class="container_flex_mobile">
    <div class="champion_box" align="center">
        <?php echo $strContent_1; ?>
    </div>
</div>

<?php
    get_footer();
?>
</body>
</html>