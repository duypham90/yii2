<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <base href="<?php echo Yii::$app->request->baseUrl;?>/">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script>var domain = 'http://localhost/yii2-shop';</script>
</head>
<body>
<?php $this->beginBody() ?>
<div class="site-container">
    <div class="site-pusher fixed">
        <div id="header" class="header fixed-header">
            <div class="main-header">
                <div class="container">
                    <div class="logo">
                        <a href="http://localhost/yii2-shop/"><img src="img/logo.png" alt=""></a>
                    </div>
                     <div class="mobile-nav-menu">
                        <span class="icon"><i class="fa fa-bars" aria-hidden="true"></i></span>

                    </div>
                    <nav class="navigation">
                        <div class="book-now">
                            <div id="toggle-book" class="toggle-book">
                                <span>BOOK NOW</span>
                            </div>                         
                        </div>
                        <i class="fa fa-close close-sitebar" aria-hidden="true"></i>
                        <ul class="nav menu text-uppercase">
                            <li><a href="cart">CART</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Menu1<span class="fa fa-angle-down"></span></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Menu1<span class="fa fa-angle-down"></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Sub 2</a></li>
                                            <li><a href="#">Sub 2</a></li>
                                            <li><a href="#">Sub 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sub 1</a></li>
                                    <li><a href="#">Sub 1</a></li>
                                    <li><a href="#">Sub 1</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Menu1<span class="fa fa-angle-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Sub 1</a></li>
                                    <li><a href="#">Sub 1</a></li>
                                    <li><a href="#">Sub 1</a></li>
                                    <li><a href="#">Sub 1</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Menu1<span class="fa fa-angle-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Sub 1</a></li>
                                    <li><a href="#">Sub 1</a></li>
                                    <li><a href="#">Sub 1</a></li>
                                    <li><a href="#">Sub 1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section" id="content">
            <?= $content ?>
           
        </section>
        <section class="section" id="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <aside class="widget">
                            <ul>
                                <li><h4>Hỗ trợ khách hàng</h4></li>
                                <li><a href="">Tìm hiểu mua trả góp</a></li>
                                <li><a href="">Chính sách đổi trả</a></li>
                                <li><a href="">Hướng dẫn mua online</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <aside class="widget">
                            <ul>
                                <li><h4>Có thắc mắc?</h4></li>
                                <li>Bán hàng (7:30 - 22:00)</li>
                                <li>1800.1060 Hoặc (08) 38.102.102</li>
                                <li>Góp ý, khiếu nại (8:00 - 21:30) 1800.1062</li>
                                <li>Bảo hành sản phẩm (8:00 - 21:00) 1800.1064</li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <aside class="widget">
                            <ul>
                                <li><h4>Giới thiệu</h4></li>
                                <li><a href="">Tuyển dụng</a></li>
                                <li><a href="">Góp ý khiếu nại</a></li>
                                <li><a href="">Bản đồ</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <aside class="widget">
                            <ul class="nhan-email">
                                <li><h4>Đăng ký nhận Email</h4></li>
                                <li>
                                    <form action="http://envato.megadrupal.com/html/caruso/subscribe" method="post">
                                        <div class="input-group">
                                          <input type="text" class="" placeholder="Enter your email address...">
                                          <span class="input-group-addon btn-email">Đăng ký</span>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            <ul class="social-list">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook back"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter back"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-google-plus back"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <i class="fa fa-instagram back"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-vimeo"></i>
                                        <i class="fa fa-vimeo back"></i>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>      
        </section>
        <footer id="footer">
            <section class="section section-footer">
                <div class="container">
                    <div class="row">              
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-4">
                            <ul class="thanhtoan">
                                <li>Bạn có thể thanh toán với</li>
                                <li><a href=""><img src="img/tien-mat.jpg" alt=""></a></li>
                                <li><a href=""><img src="img/the-atm.jpg" alt=""></a></li>
                                <li><a href=""><img src="img/visa.jpg" alt=""></a></li>
                                <li><a href=""><img src="img/mastercard.jpg" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <ul class="chungnhan">
                                <li>Chứng nhận SGD TMĐT</li>
                                <li><a href="#"><img src="img/s1.png"></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                            <p class="info-company">© 2014. Công ty cổ phần Thế Giới Di Động. Chính sách sử dụng web Văn phòng:Lầu 5 Etown 2, 364 Cộng Hòa, Q.Tân Bình, TP.Hồ Chí Minh.GP số 22/GP-ICP-STTTT do Sở TTTT TP HCM cấp ngày 20/03/2012 Chịu trách nhiệm nội dung: Điêu Chính Hải Triều</p>
                        </div> 
                    </div>
                </div>     
            </section>
        </footer>   
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
