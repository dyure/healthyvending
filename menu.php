
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		.nav ul {
			display: flex;
			align-items: center;
		}
		.nav ul li {
			list-style: none;
			margin: 0 15px;
		}
		.nav ul li:last-child {
			margin-right: 0;
		}
		.nav ul li a {
			color: #fff;
			transition: all .3s ease;
		}
		.nav ul li a:hover {
			color: #c0c0c0;
			transition: all .3s ease;
		}
		.nav .responsive_close,
		.nav .fa.fa-bars {
		    display: none;
		}
		.nav #responsive_menu {
		    position: absolute;
		    visibility: hidden;
		    z-index: -9999;
		}
		@media screen and (max-width: 768px) {
		    .nav ul {
		        position: fixed;
		        top: 0;
		        right: -100%;
		        width: 100%;
		        height: 100vh;
		        background-color: #000;
		        flex-direction: column;
		        padding-top: 50px;
		        box-sizing: border-box;
		        transition: 300ms;
		    }
		    .nav ul li {
		        margin: 20px 0;
		        font-size: 20px;
		    }
		    .nav .responsive_close {
		        display: none;
		    }
		    /* close */
		    .nav .fa.fa-times {
		        position: absolute;
		        top: 23px;
		        right: 23px;
		        cursor: pointer;
		    }
		    /* open */
		    .nav .fa.fa-bars {
		        display: block;
		        font-size: 20px;
		        color: #fff;
		        cursor: pointer;
		    }
		    .nav #responsive_menu:checked ~ ul {
		        right: 0;
		    }
		    .nav #responsive_menu:checked ~ .responsive_close {
		        display: block;
		        font-size: 20px;
		        color: #fff;
		    }
		}
	</style>
</head>
<body>
<div class="nav">
	<input type="checkbox" id="responsive_menu" />
	<ul>
		<li>О проекте</li>
		<li>SPORTPIT</li>
		<li>GREEN SNACK</li>
		<li>Ассортимент</li>
	</ul>

	<label class="responsive_close" for="responsive_menu"><i class="fa fa-times"></i></label>
	<label for="responsive_menu"><i class="fa fa-bars"></i></label>
</div>

</body>
</html>