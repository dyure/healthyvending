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
    $intPostUID_11 = get_post(293);
    $strContent_11 = $intPostUID_11->post_content;
    $intPostUID_12 = get_post(14);
    $strContent_12 = $intPostUID_12->post_content;
    $intPostUID_2 = get_post(16);
    $strContent_2 = $intPostUID_2->post_content;
    $intPostUID_3 = get_post(67);
    $strContent_3 = $intPostUID_3->post_content;
?>

<div class="before_header_1 container_flex">
    <div class="container_grid">
        <div class="left"><?php echo '<img class="img_542x454" src="' . get_the_post_thumbnail_url(14, 'large') . '" alt="">'; ?></div>
        <div class="text_center right">
            <?php echo $strContent_11; ?>
            <?php echo $strContent_12; ?>
        </div>
    </div>
</div>
<div class="container_flex_mobile">
    <div class="before_header container_grid">
        <div class="left">
            <?php echo $strContent_11; ?>
        </div>
        <div class="left_img">
            <?php echo '<img class="img_542x454" src="' . get_the_post_thumbnail_url(14, 'large') . '" alt="">'; ?>
        </div>
        <div class="text_center right">
            <?php echo $strContent_12; ?>
        </div>
    </div>
</div>

<div class="bd_dark container_flex">
    <div class="container_grid">
        <div class="text_center left"><?php echo $strContent_2; ?></div>
        <div class="text_center right"><?php echo '<img class="img_542x454" src="' . get_the_post_thumbnail_url(16, 'large') . '" alt="">'; ?></div>
    </div>
</div>
<div class="container_flex_mobile">
    <div class="container_grid">
        <div class="text_center left_img">
            <?php echo '<img class="img_542x454" src="' . get_the_post_thumbnail_url(16, 'large') . '" alt="">'; ?>
        </div>
        <div class="text_center left"><?php echo $strContent_2; ?></div>
    </div>
</div>

<div class="before_footer container_flex">
    <div class="container_grid">
        <div class="left"><?php echo '<img class="img_542x454" src="' . get_the_post_thumbnail_url(67, 'large') . '" alt="">'; ?></div>
        <div class="text_center right"><?php echo $strContent_3; ?></div>
    </div>
</div>
<div class="before_footer container_flex_mobile">
    <div class="container_grid">
        <div class="left_img">
            <?php echo '<img class="img_542x454" src="' . get_the_post_thumbnail_url(67, 'large') . '" alt="">'; ?>
        </div>
        <div class="text_center right"><?php echo $strContent_3; ?></div>
    </div>
</div>

<?php
    get_footer();
?>
</body>
</html>