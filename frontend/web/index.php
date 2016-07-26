<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
//YII_ENABLE_ERROR_HANDLER：标识是否启用 Yii 提供的错误处理，默认为 true。
//defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER','true');

// 注册 Composer 自动加载器
require(__DIR__ . '/../../vendor/autoload.php');
// 包含 Yii 类文件
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

// 加载应用配置
$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/main.php'),
    require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/main-local.php')
);

// 创建、配置、运行一个应用
$application = new yii\web\Application($config);
$application->run();
