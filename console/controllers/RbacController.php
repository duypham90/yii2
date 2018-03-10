<?php
namespace console\controllers;
use yii;
use yii\console\Controller;
class RbacController extends Controller
{
	
	public function actionInit()
	{
        $auth = Yii::$app->authManager;

        // add the rule
        // $rule = new \console\rbac\AuthorRule;
        // $auth->add($rule);
        // $updateOwnHotels = $auth->createPermission('updateOwnHotels');
        // $updateOwnHotels->description = 'Update own hotel';
        // $updateOwnHotels->ruleName = $rule->name;
        // $auth->add($updateOwnHotels);
    
        // $updateHotel = $auth->createPermission('update-hotels');
        // $auth->addChild($updateOwnHotels, $updateHotel);

        // $author = $auth->createRole('manager-hotel');
        // $auth->addChild($author, $updateOwnHotels);

        // $deleteOwnHotels = $auth->createPermission('deleteOwnHotels');
        // $deleteOwnHotels->description = 'Update own hotel';
        // $updateOwnHotels->ruleName = $rule->name;
        // $auth->add($deleteOwnHotels);
    
        // $updateHotel = $auth->createPermission('delete-hotels');
        // $auth->addChild($deleteOwnHotels, $updateHotel);

        // $author = $auth->createRole('manager-hotel');
        // $auth->addChild($author, $deleteOwnHotels);



        /* *** thêm rule cho bảng auth_rule****/

		//$createPost = $auth->createPermission('create-post');
        // $createPost->description = 'Create a post';
        // $auth->add($createPost);

        //$indexPost = $auth->createPermission('index-post');
        // $indexPost->description = 'danh sách bài viết';
        // $auth->add($indexPost);

        //$updatePost = $auth->createPermission('update-post');
        // $updatePost->description = 'update bài viết';
        // $auth->add($updatePost);

        //$deletePost = $auth->createPermission('delete-post');
        // $deletePost->description = 'Xóa bài viết';
        // $auth->add($deletePost);

        //$viewPost = $auth->createPermission('view-post');
        // $viewPost->description = 'Xem bài viết';
        // $auth->add($viewPost);

        // $createHotel = $auth->createPermission('create-hotels');
        // $createHotel->description = 'Create a Hotel';
        // $auth->add($createHotel);

        // $indexHotel = $auth->createPermission('index-hotels');
        // $indexHotel->description = 'List Hotels';
        // $auth->add($indexHotel);

        // $updateHotel = $auth->createPermission('update-hotels');
        // $updateHotel->description = 'update Hotel';
        // $auth->add($updateHotel);

        // $deleteHotel = $auth->createPermission('delete-hotels');
        // $deleteHotel->description = 'Delete Hotel';
        // $auth->add($deleteHotel);

        // $viewHotel = $auth->createPermission('view-hotels');
        // $viewHotel->description = 'View Hotel';
        // $auth->add($viewHotel);

       

        // $postManager = $auth->createRole('manager-post');
        // $auth->add($postManager);

   	    $hotelManager = $auth->createRole('manager-booking');
        $auth->addChild($hotelManager,$createHotel);
        $auth->addChild($hotelManager,$indexHotel);
        $auth->addChild($hotelManager,$updateHotel);
        $auth->addChild($hotelManager,$deleteHotel);
        $auth->addChild($hotelManager,$viewHotel);




        // $auth->add($hotelManager);

        // $bookingManager = $auth->createRole('manager-booking');
        // $auth->add($bookingManager);

        // $roomtypeManager = $auth->createRole('manager-roomtype');
        // $auth->add($roomtypeManager);

        // $roomManager = $auth->createRole('manager-room');
        // $auth->add($roomManager);

        // $rateManager = $auth->createRole('manager-rate');
        // $auth->add($rateManager);

        // $promotionManager = $auth->createRole('manager-promotion');
        // $auth->add($promotionManager);

        // $experienceManager = $auth->createRole('manager-experience');
        // $auth->add($experienceManager);

        // $nearbyManager = $auth->createRole('manager-nearby');
        // $auth->add($nearbyManager);

        // $seoManager = $auth->createRole('manager-seo');
        // $auth->add($seoManager);

        // $settingManager = $auth->createRole('manager-setting');
        // $auth->add($settingManager);

        //$admin = $auth->createRole('admin');
        //$auth->addChild($admin,$hotelManager);
        //$auth->addChild($admin,$postManager);

        //$auth->assign($author, 2);
        //$auth->assign($admin, 1);


        //$auth->addChild($author, $createPost);

	}
}