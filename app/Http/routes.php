<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$categories = array(
		"手机通讯" => array("智能手机","非智能手机","对讲机","手机蓝牙耳机"),
		"摄影摄像" => array("单反机身","微单相机","数码相机","家用摄像机","专业摄像机","单反镜头","微单镜头","脚架","闪光灯"),
		"相机配件" => array("数码配件","充电器","电池","电脑支架","移动电源","触控笔","其它数码配件"),
		"存储设备" => array("存储卡","移动硬盘","磁盘阵列","U盘","NAS存储","存储配件","影音播放","随身播放器","耳塞式耳机","头戴式耳机","多媒体音箱","插卡音箱","基座音箱","HIFI音箱","无线音箱","便携音箱","电视盒子","录音笔","麦克风","调音台","耳机放大器","监听音箱","监听耳机"),
		"电脑整机" => array("平板电脑","普通笔记本","游戏本","触控笔记本","超极本","上网本","台式机","服务器"),
		"电脑外设" => array("电脑外设","鼠标","键盘","游戏机","游戏手柄","游戏摇杆","游戏眼镜","无线键盘","耳麦","触控板","数位板","手写板","鼠标垫","其它电脑外设"),
		"网络设备" => array("路由器","交换机","网卡","电脑配件","主板","CPU","显卡","固态硬盘","普通硬盘","内存","机箱","电脑电源","显示器","刻录机","散热器","声卡","UPS电源","其它电脑配件"),
		"穿戴设备" => array("智能手环","智能手表","智能眼镜","其它智能设备")
	);
	return view('welcome')->with('categories', $categories);
});

// Route::get('/product/{pid?}', function($id="1") {
// 	return 'product'.$id;
// });

Route::get('/product/{pid?}', 'ProductController@showProduct');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    // 
});
