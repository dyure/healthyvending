<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="out container-xl">
        <section class="footer__ row">
            <div class="footer__logo col-2 d-none d-xl-block">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="https://healthyvending.ru/wp-content/uploads/2020/12/logo-1.png" width="166" height="32" alt="<?php the_title(); ?>">
                </a>
            </div>
            <div class="footer__menu col">
                <div class="footer__menu_left">
                    <ul>
                        <li><a href="#">О проекте</a></li>
                        <li><a href="#">SPORTPIT</a></li>
                        <li><a href="#">GREEN SNACK</a></li>
                        <li><a href="#">Яндекс-бейдж</a></li>
                    </ul>
                </div>
                <div class="footer__menu_right">
                    <ul>
                        <li><a href="#">Сотрудничество</a></li>
                        <li><a href="#">Ассортимент</a></li>
                        <li><a href="#">Локация</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__email col-3">
                <div class="footer__email_email">
                    <div class="email_pic">
                        <img src="https://healthyvending.ru/wp-content/uploads/2023/02/envelope_green.png" width="20" height="20" alt="">
                        <span>По общим вопросам</span>
                    </div>
                    <div class="email_text">
    					<a href="mailto:box@healthyvending.ru">box@healthyvending.ru</a>
                    </div>
				</div>
                <div class="footer__email_chief">
                    <div class="chief_pic">
                        <img src="https://healthyvending.ru/wp-content/uploads/2023/02/user_green.png" width="20" height="20" alt="">
                        Руководитель проекта
                    </div>
                    <div class="chief_text">
                        <apan>Смирнов Александр</span>
                    </div>
				</div>
            </div>
            <div class="footer__phone col-3">
                <div class="footer__phone_phone">
                    +7 985 649 98 89
                </div>
                <div class="footer__phone_social">
                    <img src="https://healthyvending.ru/wp-content/uploads/2020/12/phone3.png" width="25" height="25" alt="">
                    <img src="https://healthyvending.ru/wp-content/uploads/2020/12/viber.png" width="25" height="25" alt="">
                    <img src="https://healthyvending.ru/wp-content/uploads/2020/12/whatsup.png" width="25" height="25" alt="">
                    <img src="https://healthyvending.ru/wp-content/uploads/2020/12/telegram3.png" width="25" height="25" alt="">
                </div>
            </div>
        </section>
    </div>
</body>
</html>