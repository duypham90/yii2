<?php
/*
	***************TABLE auth_rule****************
	auth_rule là bảng tùy biến

	*****************TABLE auth_item****************************
	chứa nhóm quyền và quyền
	name update-hotel(2), manager-hotels(1)
	type phân biệt quyền và nhóm quyền, VD 1, 2 
	description
	data
	rule_name
	- tạo nhóm quyền: $author = $auth->createRole('manager-hotel'); type =1
	- tạo quyền type =2
		$createPost = $auth->createPermission('createPost');
        $createPost->description = 'Create a post';
        $auth->add($createPost);


	******************TABLE auth_item_child*********************
	gán quyền cho nhóm, VD: nhóm admin sẽ có những quyền gì
	parent
	child
	-	$createHotel = $auth->createPermission('create-hotels'); / quyền đã tạo thêm mới hotel
	-	$indexHotel = $auth->createPermission('index-hotels');
	-	$updateHotel = $auth->createPermission('update-hotels');
	-	$deleteHotel = $auth->createPermission('delete-hotels');
	-	$viewHotel = $auth->createPermission('view-hotels');

	-	$hotelManager = $auth->createRole('manager-booking');  //manager-booking nhóm quyền đã tạo trước
        $auth->addChild($hotelManager,$createHotel);
        $auth->addChild($hotelManager,$indexHotel);
        $auth->addChild($hotelManager,$updateHotel);
        $auth->addChild($hotelManager,$deleteHotel);
        $auth->addChild($hotelManager,$viewHotel);

	ví dụ nhóm quyền quản lý tin: có 5 quyền create, update, delete, view, index

	*********************TABLE auth_assignment*************************
	gán quyền cho người dùng
	item_name chính là nhóm quyền nào hoặc quyền nào đó
	user_id  gán quyền cho user nào đó

	- $auth->assign($author, 2); gán quyền author cho user có id =2
    - $auth->assign($admin, 1); gán quyền author cho user có id =1
    - $auth->assign($hotelManager, 1); gán quyền author cho user có id =1


*/
