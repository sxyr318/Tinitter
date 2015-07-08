<?php
namespace Tinitter;
class Route{
	static function registration($app){
		
		// トップページ
		$app->get('/',
		'\Tinitter\Controller\TimeLine:show');
		
		// 投稿一覧
		$app->get('/page/:page_rum', '\Tinitter\Controller\TimeLine:show');
	}
}