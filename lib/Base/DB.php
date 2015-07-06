<?php
namespace Base;
class BD
{
	// illuminateのデータベース接続設定とブートアップ
	static function registerIlluminate(array $settings)
	{
		$capsule =new \illuminate\Database\Capsule\Manager;
		$capsule->addConnection($settings);
		$capsule->setEventDispatcher(
			new \Illuminate\Events\Disppatche(
				new \Illuminate\Container\Container()
			)
		);
		$capsule->setAsGlobal();
		$capsule->bootEloquent();
	}
}
	