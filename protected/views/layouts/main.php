<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Honey Boney</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.png">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:200,300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/fonts/font-awesome/css/font-awesome.min.css">
    <link href="/vendor/lightbox2/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/honey.css">
</head>
<body id="page-top">
<header>
    <div class="container">
        <div class="nav-block">
            <div class="menu-top-part">
                <ul class="left-top-menu">
                    <li><a href="/about.php">о нас</a></li>
                    <li><a href="/catalog.php">каталог</a></li>
                    <li><a href="/wedding-compliments.php">свадебные комплименты</a></li>
                </ul>
                <a href="/"><div class="honey-logo"></div></a>
                <ul class="right-top-menu">
                    <li><a href="/gift-baskets.php">подарочные наборы</a></li>
                    <li><a href="/delivery.php">доставка</a></li>
                    <li><a href="/blog.php">блог</a></li>
                </ul>
            </div>
            <div class="menu-bottom-part">
                <div class="easy-make-order">сделать заказ легко: +7(911)987-14-88</div>
                <div class="make-order">оставить заявку</div>
            </div>
        </div>
        <div class="navbar" id="medium-nav">
            <div class="navbar-header navbar-default">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">открыть навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav">
                    <li><a href="/about.php">о нас</a></li>
                    <li><a href="/catalog.php">каталог</a></li>
                    <li><a href="/wedding-compliments.php">свадебные комплименты</a></li>
                    <li><a href="/gift-baskets.php">подарочные наборы</a></li>
                    <li><a href="/delivery.php">доставка</a></li>
                    <li><a href="/blog.php">блог</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="scroll-top page-scroll">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<?php /* ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
<?php */ ?>
	<?php echo $content; ?>
<?php /*
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
<?php */ ?>
<section id="follow-us">
    <div class="hr-line"></div>
    <div class="follow-title">Follow us</div>
    <div class="instagram-wiget-wrapper">
        <iframe src='/inwidget/index.php?toolbar=false&width=1240&height=270&preview=large&view=24&inline=12' scrolling='no' frameborder='no' style='border:none;width:1240px;height:270px;overflow:hidden;'></iframe>
    </div>
</section>
<section id="footer-contact">
    <div class="container">
        <div class="make-order-bottom">
            оставить заявку
        </div>
        <div class="row">
            <form action="">
                <div class="col-md-5">
                    <div class="left-block">
                        <input class="user_name" name="user_name" type="text" placeholder="Имя">
                        <input class="user_mail" name="user_mail" type="text" placeholder="Email">
                        <input class="user_phone" name="user_phone" type="text" placeholder="Телефон">
                        <input type="hidden" name="page" value="<?="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <div class="right-block">
                        <textarea cols="30" rows="10" class="user_message" name="user_message" placeholder="Сообщение"></textarea>
                        <div id="form-message"></div>
                        <a class="send-contact-mail" href="#">ОТПРАВИТЬ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section id="footer-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-menu">
                    <ul>
                        <li><a href="/about.php">о нас</a></li>
                        <li><a href="/blog.php">блог</a></li>
                        <li><a href="/delivery.php">доставка</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-menu">
                    <ul>
                        <li><a href="/catalog.php">каталог</a></li>
                        <li><a href="/gift-baskets.php">подарочные наборы</a></li>
                        <li><a href="/wedding-compliments.php">свадебные комплименты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 join-wrapper">
                <div class="join-us">
                    <div class="join-text">Присоединяйтесь к нам</div>
                    <div class="network-icons">
                        <a href="https://vk.com/honeybspb" target="_blank">
							<span class="fa-stack fa-2x">
							  <i class="fa fa-circle fa-stack-2x"></i>
							  <i class="fa fa-vk fa-stack-1x"></i>
							</span>
                        </a>
                        <a href="https://www.instagram.com/honeybspb" target="_blank">
							<span class="fa-stack fa-2x">
							  <i class="fa fa-circle-o fa-stack-2x"></i>
							  <i class="fa fa-instagram fa-stack-1x"></i>
							</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/lightbox2/js/lightbox.min.js"></script>
<script src="/vendor/easing/jquery.easing.1.3.min.js"></script>
<script src="/js/script.js"></script>

</body>
</html>
