<?php
return array(
	'booking' => array('admin','delete','view', 'showcard', 'report', 'cancel'),
	'hotel' => array('admin', 'create', 'update', 'delete'),
	'roomtype' => array('admin', 'create', 'update', 'delete', 'deletephoto'),
	'occupancy' => array('admin'),
	'room' => array('admin'),
	'rate' => array('admin'),
	'promotion' => array('admin', 'create', 'update', 'delete'),
	'cms' => array('admin', 'create', 'update', 'delete'),
	'gallery' => array('admin', 'create', 'upload', 'update_order', 'deleteItem'),
	'slideshow' => array('admin', 'create', 'delete', 'update', 'updateItem', 'view', 'upload','deleteItem'),
	'settings' => array('admin','create','update', 'delete'),
	'user' => array('admin', 'create', 'update', 'delete'),
	'roles' => array('admin', 'create', 'update', 'delete'),
	'tour' => array('admin', 'create', 'update', 'delete'),
);
?>