<?php
namespace ua\icons\helpers;

use ua\helpers\Html;
use Yii;

/**
 * BaseIcon provides concrete implementation for Icon class
 *
 * includes : Flaticon
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 0.23
 * @since 0.1
 */
class BaseIcon
{
    static function flaticon($iconName)
    {
        $prefix = 'flaticon';
        self::registerAsset($prefix);

        return Html::tag('i', ['class' => $prefix . '-' . $iconName]);
    }

    protected static function registerAsset($iconAsset)
    {
        $view = Yii::$app->getView();

        switch ($iconAsset){
            case 'flaticon' :
                FlaticonAsset::register($view);
                break;
        }
    }
}