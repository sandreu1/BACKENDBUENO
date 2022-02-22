<?php

use yii\helpers\Url;
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

function hasRole($tipo) {
    if(Yii::$app->user->isGuest)
        $tipouser='*';
    else
        $tipouser = Yii::$app->user->identity->tipo;
    return $tipouser == $tipo || $tipouser == 'A';
}

function isAdmin() {
    if(!Yii::$app->user->isGuest && Yii::$app->user->identity->tipo == "A") {
        return true;
    } else {
        return false;
    }
}

function checkLogged() {
    if(!isAdmin()) {
        $url = Url::home();
        header("Location: " . $url . "site/login");
        exit;
    }
}
$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
