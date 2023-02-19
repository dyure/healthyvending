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
        <section class="footer__ row">
            <div class="footer__logo d-none d-xl-block col-xl-2">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="https://healthyvending.ru/wp-content/uploads/2020/12/logo-1.png" alt="<?php the_title(); ?>">
                </a>
            </div>
            <div class="footer__menu col-12 col-sm-6 col-md-8 col-xl-4">
                <div class="row">
                    <div class="footer__menu col-md-6">
                        <ul>
                            <li><a href="#">О проекте</a></li>
                            <li><a href="#">SPORTPIT</a></li>
                            <li><a href="#">GREEN SNACK</a></li>
                            <li><a href="#">Яндекс-бейдж</a></li>
                        </ul>
                    </div>
                    <div class="footer__menu col-md-6">
                        <ul>
                            <li><a href="#">Сотрудничество</a></li>
                            <li><a href="#">Ассортимент</a></li>
                            <li><a href="#">Локация</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__contacts col-12 col-sm-6 col-md-4 col-xl-6">
                <div class="row">
                    <div class="footer__contacts_email d-lg-flex flex-column align-items-end col-xl-6">
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