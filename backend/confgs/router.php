<?php
$language = require_once('language_configs.php');
$lang = '';
$i=0;
foreach ($language as $key => $value) {
	$lang .=$key;
	if($i<count($language)-1){
		$lang .= '|';
	}
	$i++;
}
return array(
			'admin' => 'admin/site/login',			
			'<lang:'.$lang.'>' => 'site/index',
			
			'<lang:'.$lang.'>/<hotel:\S+>/rooms.html' => 'room/index',
			'<lang:'.$lang.'>/<hotel:\S+>/gallery.html' => 'gallery/index',
			'<lang:'.$lang.'>/<hotel:\S+>/contact.html' => 'site/contact',
			'<lang:'.$lang.'>/<hotel:\S+>/search.html' => 'booking/index',
			'<lang:'.$lang.'>/<hotel:\S+>/prebook.html' => 'booking/prebook',
			//'<lang:'.$lang.'>/<hotel:\S+>/booking-options.html' => 'booking/option',
			//'<lang:'.$lang.'>/<hotel:\S+>/booking-detail.html' => 'booking/detail',
			'<lang:'.$lang.'>/<hotel:\S+>/payment.html' => 'booking/payment',
			'<lang:'.$lang.'>/<hotel:\S+>/thankyou.html' => 'booking/thankyou',
			'<lang:'.$lang.'>/404.html' => 'site/error',
			'<lang:'.$lang.'>/offers.html' => 'offer/index',
			'<lang:'.$lang.'>/<hotel:\S+>/offers.html' => 'offer/index',
			'<lang:'.$lang.'>/<hotel:\S+>/offers/<offer_slug:\S+>.html' => 'offer/detail',
			'<lang:'.$lang.'>/restaurants.html' => 'cms/other',
			'<lang:'.$lang.'>/<hotel:\S+>/offers/<offer_slug:\S+>.html' => 'offer/detail',
			'<lang:'.$lang.'>/<hotel:\S+>/rooms/<room_slug:\S+>.html' => 'room/detail',
			'<lang:'.$lang.'>/<hotel:\S+>/<cms:\S+>/<cms_slug>.html' => 'cms/index',
			'<lang:'.$lang.'>/<hotel:\S+>/<cms:\S+>.html' => 'cms/index',
			'<lang:'.$lang.'>/<hotel:\S+>.html' => 'site/index',
			
			
			
			
			'<lang:'.$lang.'>/site/recieve' => 'site/recieve',
			//'booking/getservices'=>'booking/getservices',
			'changeattributes' => 'booking/changeattributes',
			'<controller:\w+>/<id:\d+>'=>'<controller>/view',
			'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		);
?>