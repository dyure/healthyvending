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

<div class="map_info">
    Карта размещения автоматов
</div>

<div class="before_header_1 container_flex">
    <div class="map">
        <div style="position:relative;overflow:hidden;">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A082ecc4912d36eadb0da7b3a7d8f405260140155fa8fc40dda387d8e8ef41330&amp;source=constructor" width="100%" height="900" frameborder="0"></iframe>
            <!--a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a>
            <a href="https://yandex.ru/maps/213/moscow/?ll=37.607139%2C55.724019&utm_medium=mapframe&utm_source=maps&z=10.52" style="color:#eee;font-size:12px;position:absolute;top:14px;">Москва — Яндекс.Карты</a>
            <iframe src="https://yandex.ru/map-widget/v1/-/CCUIATUPLA" width="100%" height="900" style="height: calc(100vh - 100px);" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe-->
        </div>
    </div>
</div>
<div class="container_flex_mobile">
    <div style="margin: 102px 0 17px 24px; color: #000;">
        <p style="font-family: 'Exo-SemiBold'; font-size: 23px; line-height: 30px;">Карта размещения автоматов</p>
    </div>
    <div class="map">
        <div style="position:relative;overflow:hidden;">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A082ecc4912d36eadb0da7b3a7d8f405260140155fa8fc40dda387d8e8ef41330&amp;source=constructor" width="100%" height="547" frameborder="0"></iframe>
            <!--a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a>
            <a href="https://yandex.ru/maps/213/moscow/?ll=37.607139%2C55.724019&utm_medium=mapframe&utm_source=maps&z=10.52" style="color:#eee;font-size:12px;position:absolute;top:14px;">Москва — Яндекс.Карты</a>
            <iframe src="https://yandex.ru/map-widget/v1/-/CCUIATUPLA" width="100%" height="547" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe-->
        </div>
    </div>
</div>

<?php
    //get_footer();
?>
</body>
</html>