<?php
namespace ua\helpers\icons;

use yii\web\AssetBundle;

/**
 * AwesomeAsset
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 1.0
 * @since 0.1
 */
class AwesomeAsset extends AssetBundle
{
    public $sourcePath = '@ua/assets';

    public $css = [
        'icons/font-awesome/font-awesome.min.css'
    ];
}