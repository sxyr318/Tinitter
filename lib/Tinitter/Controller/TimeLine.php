<?php
namespace Tinitter\Controller;
class TimeLine
{
	public function show()
	{
		$app = \Slim\Slim::getInstance();
		
		$post = new \Tinitter\Model\Post;	// 新規にPostオブジェクトを作成
		$post->nickname = 'ニックネーム';	// nicnameカラムにセット
		$post->body = '本文';				// bodyカラムにセット
		$post->save();						// 保温を実行
		$same_post = \Tinitter\Model\Post::find(1);		// ID=1のデータを1件取得
		
		$app->render(
			'index.twig',
			['desplay_text'=>"Hello, World!"]
		);
	}
}