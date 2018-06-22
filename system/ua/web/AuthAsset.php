<?php
namespace ua\web;

use yii\web\AssetBundle;

/**
 * AuthAsset
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 1.0
 * @since 0.1
 */
class AuthAsset extends AssetBundle
{
    public $sourcePath = '@ua/assets';

    public $css = [
        'css/auth.css',
        'fonts/Poppins/poppins.css'
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}