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
    $intPostUID_11 = get_post(300);
    $strContent_11 = $intPostUID_11->post_content;
    $intPostUID_12 = get_post(110);
    $strContent_12 = $intPostUID_12->post_content;
    $intPostUID_2 = get_post(121);
    $strContent_2 = $intPostUID_2->post_content;
    $intPostUID_3 = get_post(132);
    $strContent_3 = $intPostUID_3->post_content;
    $intPostUID_4 = get_post(305);
    $strContent_4 = $intPostUID_4->post_content;
?>

<div class="before_header_1 container_flex">
    <div class="container_grid">
        <div class="left">
            <?php echo '<img class="img_542x454" src="' . get_the_post_thumbnail_url(110, 'large') . '" alt="">'; ?>
        </div>
        <div class="right">
            <img class="img_496x37" src="https://healthyvending.ru/wp-content/uploads/2020/12/greenshack2.png" alt=""><br>
            <?php echo $strContent_11; ?>
            <?php echo $strContent_12; ?>
        </div>
    </div>
</div>
<div class="container_flex_mobile">
    <div class="before_header container_grid">
        <div class="left">
            <img class="img_496x37" src="https://healthyvending.ru/wp-content/uploads/2020/12/greenshack2.png" alt=""><br>
            <?php echo $strContent_11; ?>
        </div>
        <div class="left_img">
            <?php echo '<img class="img_542x454" src="' . get_the_post_thumbnail_url(110, 'large') . '" alt="">'; ?>
        </div>
        <div class="right">
            <?php echo $strContent_12; ?>
        </div>
    </div>
</div>

<div class="bd_dark container_flex">
    <div class="container_grid">
        <div class="left"><?php echo $strContent_2; ?></div>
        <div class="text_center right">
            <div class="center">
                <?php echo '<img class="img_314x477" src="' . get_the_post_thumbnail_url(121, 'large') . '" alt="">'; ?>
            </div>
        </div>
    </div>
</div>
<div class="container_flex_mobile">
    <div class="container_grid">
        <div class="right">
            <div class="center">
                <?php echo '<img class="img_314x477" src="' . get_the_post_thumbnail_url(121, 'large') . '" alt="">'; ?>
            </div>
        </div>
        <div class="left"><?php echo $strContent_2; ?></div>
    </div>
</div>

<div class="before_footer container_flex">
    <div class="container_grid">
        <div class="left"><?php echo $strContent_4; ?></div>
        <div class="text_center right" align="center">
            <?php echo $strContent_3; ?>
            <p class="title_3"><a href="cooperation/">Сотрудничество</a></p>
        </div>
    </div>
</div>
<div class="before_footer container_flex_mobile">
    <div class="container_grid">
        <div class="left_img"><?php echo $strContent_4; ?></div>
        <div class="text_center right" align="center">
            <?php echo $strContent_3; ?>
            <p class="title_3"><a href="cooperation/">Сотрудничество</a></p>
        </div>
    </div>
</div>

<?php
    get_footer();
?>
</body>
</html>