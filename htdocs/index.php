<?php
// ライブラリの読み込み
require '../vendor/autoload.php';

// 設定ファイルの読み込み
require __DIR__.'/../config.php';

// データベース接続のセットアップ
\Base\DB::registerIlluminate($db_settings);

// Slimの初期化
$app = new \Slim\Slim([
	'templates.path' => TEMPLATES_DIR_PATH,
	'view' => new \Slim\Views\Twig()
]);

// Slimにルートを登録
\Tinitter\Route::registration($app);
// 実行
$app->run();