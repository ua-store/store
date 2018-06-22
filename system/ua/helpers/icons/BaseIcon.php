<?php
namespace ua\helpers\icons;

use ua\helpers\Html;
use Yii;

/**
 * BaseIcon provides concrete implementation for Icon class
 *
 * includes : Flaticon
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 0.41
 * @since 0.1
 */
class BaseIcon
{
    static function flaticon($iconName, $tag = false, $options = [])
    {
        $prefix = 'flaticon';
        self::registerAsset($prefix);

        if($tag){
            $icon = Html::tag('i', '', ['class' => $prefix . '-' . $iconName]);
            $icon = Html::tag($tag, $icon, $options);
        }
        else{
            $options['class'] = $prefix . '-' . $iconName;
            $icon = Html::tag('i', '', $options);
        }

        return $icon;
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