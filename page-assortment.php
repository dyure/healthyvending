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
    $intPostUID_1 = get_post(134);
    $strContent_1 = $intPostUID_1->post_content;
    $intPostUID_2 = get_post(136);
    $strContent_2 = $intPostUID_2->post_content;
    $intPostUID_3 = get_post(138);
    $strContent_3 = $intPostUID_3->post_content;
?>

<div class="before_header_1 container_flex">
    <div class="container_grid">
        <div class="left"><?php echo $strContent_1; ?></div>
        <div class="right" style="margin-top: 60px;"><?php echo $strContent_2; ?></div>
    </div>
</div>
<div class="container_flex_mobile">
    <div class="before_header container_grid">
        <div class="left"><?php echo $strContent_1; ?></div>
        <div class="right"><?php echo $strContent_2; ?></div>
    </div>
</div>

<div class="bd_dark container_flex">
    <div class="container_grid">
        <div class="text_center left"><?php echo $strContent_3; ?></div>
        <div class="text_center right" align="center">
            <p class="title_3"><a href="#">Скачать прайс</a></p>
            <div class="title_5">
                <a href="#"><img class="img_330x60" src="https://healthyvending.ru/wp-content/uploads/2020/12/button.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
<div class="bd_dark container_flex_mobile">
    <div class="container_grid" style="margin: 45px 0 60px 0;">
        <div class="text_center left"><?php echo $strContent_3; ?></div>
        <div class="text_center right" align="center">
            <p class="title_3"><a href="#">Скачать прайс</a></p>
            <div class="title_5">
                <a href="#"><img class="img_330x60" src="https://healthyvending.ru/wp-content/uploads/2020/12/button.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<div class="before_footer container_flex">
    <div class="container_grid">
        <div class="partners">
            <p class="title_6">Наши партнеры</p>
            <p>Переход на сайты поставщиков-производителей</p>
        </div>
    </div>
    <div class="logos">
        <div class="logo1"><a target="_blank" href="https://www.bombbar.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/1.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="https://www.level99.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/2.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://oshee-vitacom.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/3.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="https://primekraft.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/4.png" alt=""></a></div>
        <div class="logo5"><a target="_blank" href="https://21power.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/5.png" alt=""></a></div>
        
        <div class="logo1"><a target="_blank" href="http://www.weider.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/6.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="https://sportexpress.org/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/7.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://www.yobaton.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/8.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="http://fitbaropt.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/9.png" alt=""></a></div>
        <div class="logo5"><a target="_blank" href="https://fitrx.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/10.png" alt=""></a></div>
        
        <div class="logo1"><a target="_blank" href="https://www.sportinia.store/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/11.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="https://green-meal.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/12.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://vasconutrition.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/13.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="http://favoritfood.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/14.png" alt=""></a></div>
        <div class="logo5"><a target="_blank" href="https://ru.biotechusa.com/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/15.png" alt=""></a></div>
        
        <div class="logo1"><a target="_blank" href="http://effortfood.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/16.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="https://gel4u.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/17.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://nrget.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/18.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="https://tobe-fit.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/19.png" alt=""></a></div>
        <div class="logo5"><a target="_blank" href="https://ironman.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/20.png" alt=""></a></div>
        
        <div class="logo1"><a target="_blank" href="https://vistens.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/21.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="https://royalnut.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/22.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://magniumpro.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/23.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="https://fitroo.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/24.png" alt=""></a></div>
        <div class="logo5"><a target="_blank" href="http://powerprorussia.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/25.png" alt=""></a></div>
    </div>
</div>
<div class="before_footer container_flex_mobile">
    <div class="container_grid">
        <div class="partners">
            <p class="title_6" style="margin-top: 60px;">Наши партнеры</p>
            <p>Переход на сайты поставщиков-производителей</p>
        </div>
    </div>
    <div class="logos_mobile">
        <div class="logo1"><a target="_blank" href="https://www.bombbar.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/1.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="https://www.level99.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/2.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://oshee-vitacom.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/3.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="https://primekraft.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/4.png" alt=""></a></div>
        
        <div class="logo1"><a target="_blank" href="https://21power.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/5.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="http://www.weider.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/6.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://sportexpress.org/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/7.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="https://www.yobaton.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/8.png" alt=""></a></div>
        
        <div class="logo1"><a target="_blank" href="http://fitbaropt.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/9.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="https://fitrx.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/10.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://www.sportinia.store/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/11.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="https://green-meal.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/12.png" alt=""></a></div>

        <div class="logo1"><a target="_blank" href="https://vasconutrition.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/13.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="http://favoritfood.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/14.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://ru.biotechusa.com/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/15.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="http://effortfood.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/16.png" alt=""></a></div>

        <div class="logo1"><a target="_blank" href="https://gel4u.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/17.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="https://nrget.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/18.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://tobe-fit.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/19.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="https://ironman.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/20.png" alt=""></a></div>
        
        <div class="logo1"><a target="_blank" href="https://vistens.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/21.png" alt=""></a></div>
        <div class="logo2"><a target="_blank" href="https://royalnut.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/22.png" alt=""></a></div>
        <div class="logo3"><a target="_blank" href="https://magniumpro.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/23.png" alt=""></a></div>
        <div class="logo4"><a target="_blank" href="https://fitroo.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/24.png" alt=""></a></div>

        <div class="logo1"><a target="_blank" href="http://powerprorussia.ru/"><img class="img_210x108" src="https://healthyvending.ru/wp-content/uploads/2020/12/25.png" alt=""></a></div>
    </div>
</div>

<?php
    get_footer();
?>
</body>
</html>