<?php
namespace ua\web;

use yii\web\AssetBundle;

/**
 * AdminAsset
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 0.56
 * @since 0.1
 */
class AdminAsset extends AssetBundle
{
    public $sourcePath = '@ua/assets';

    public $css = [
        'css/admin.css',
        'fonts/Poppins/poppins.css'
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}