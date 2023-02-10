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
    $intPostUID_1 = get_post(196);
    $strContent_1 = $intPostUID_1->post_content;
    $intPostUID_2 = get_post(201);
    $strContent_2 = $intPostUID_2->post_content;
?>

<div class="before_header_1 before_footer container_flex" style="margin-bottom: 5%;">
    <div class="container_grid">
        <div class="left"><?php echo $strContent_1; ?></div>
        <div class="right" style="margin-top: 70px;" align="center"><?php echo $strContent_2; ?></div>
    </div>
</div>
<div class="before_footer container_flex_mobile">
    <div class="before_header container_grid">
        <div class="left"><?php echo $strContent_1; ?></div>
        <div class="right" style="margin-top: 70px;" align="center"><?php echo $strContent_2; ?></div>
    </div>
</div>

<?php
    get_footer();
?>
</body>
</html>