<?php
namespace Tinitter;
class Route{
	static function registration($app){
		
		// �g�b�v�y�[�W
		$app->get('/',
		'\Tinitter\Controller\TimeLine:show');
		
		// ���e�ꗗ
		$app->get('/page/:page_rum', '\Tinitter\Controller\TimeLine:show');
	}
}