<?php

namespace app\assets;

/**
 * @author Alexandr Sibov<cyberdelia1987@gmail.com>
 */
class RedefineAsset extends \yii\web\AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap-theme.css',
    ];
}