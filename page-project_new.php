<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body class="new">
    <div class="container-sm container-md container-xl container-xxl">
        <section class="header">
            <div class="row">
                <nav class="menu_left_new d-none d-xl-block col-xl-5">
                    <?php wp_nav_menu('menu=left'); ?>
                </nav>
                <div class="menu_logo_new col-xl-2 d-flex justify-content-xl-center col-6 justify-content-lg-start">
                    <a href="<?php echo get_home_url(); ?>" class="d-flex align-items-center">
                        <img src="https://healthyvending.ru/wp-content/uploads/2020/12/logo-1.png" width="150" height="27" alt="<?php the_title(); ?>">
                    </a>
                </div>
                <div class="d-xl-none d-lg-block col-6">
                    <div class="menu_burger d-flex align-items-center justify-content-end">
                        <img src="https://healthyvending.ru/wp-content/uploads/2020/12/bars.png" alt="" />
                    </div>
                </div>
                <nav class="menu_right_new d-none d-xl-block col-xl-5">
                    <?php wp_nav_menu('menu=right'); ?>
                </nav>
            </div>
            <div class="nav_mobile">
                <?php wp_nav_menu('menu=mobile'); ?>
            </div>
        </section>

        <section class="footer__ row">
            <div class="footer__logo d-none d-xl-block col-xl-2">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="https://healthyvending.ru/wp-content/uploads/2020/12/logo-1.png" alt="<?php the_title(); ?>">
                </a>
            </div>
            <div class="footer__menu col-12 col-sm-6 col-md-8 col-xl-5">
                <div class="row">
                    <div class="footer__menu col-md-6 d-xl-flex justify-content-xl-center">
                        <ul>
                            <li><a href="#">О проекте</a></li>
                            <li><a href="#">SPORTPIT</a></li>
                            <li><a href="#">GREEN SNACK</a></li>
                            <li><a href="#">Яндекс-бейдж</a></li>
                        </ul>
                    </div>
                    <div class="footer__menu col-md-6 d-xl-flex justify-content-xl-start">
                        <ul>
                            <li><a href="#">Сотрудничество</a></li>
                            <li><a href="#">Ассортимент</a></li>
                            <li><a href="#">Локация</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__contacts col-12 col-sm-6 col-md-4 col-xl-5">
                <div class="row">
                    <div class="footer__contacts_email d-lg-flex flex-column align-items-lg-end align-items-xl-start col-xl-6">
                        <div class="email_pic">
                            <img src="https://healthyvending.ru/wp-content/uploads/2023/02/envelope_green.png" alt="">
                            <span>По общим вопросам</span>
                        </div>
                        <div class="email_text first">
                            <a href="mailto:box@healthyvending.ru">box@healthyvending.ru</a>
                        </div>
                        <div class="email_pic">
                            <img src="https://healthyvending.ru/wp-content/uploads/2023/02/user_green.png" alt="">
                            Руководитель проекта
                        </div>
                        <div class="email_text">
                            <span>Александр Смирнов</span>
                        </div>
                    </div>
                    <div class="footer__contacts_phone d-md-flex flex-column align-items-lg-end col-xl-6">
                        <div class="phone_phone">
                            +7 &nbsp;985 &nbsp;649 &nbsp;98 &nbsp;89
                        </div>
                        <div class="phone_social">
                            <img src="https://healthyvending.ru/wp-content/uploads/2023/02/phone_new.png" alt="">
                            <img src="https://healthyvending.ru/wp-content/uploads/2023/02/viber_new.png" alt="">
                            <img src="https://healthyvending.ru/wp-content/uploads/2023/02/whatsapp_new.png" alt="">
                            <img src="https://healthyvending.ru/wp-content/uploads/2023/02/telegram_new.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>