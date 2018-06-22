<?php
namespace ua\helpers\icons;

use ua\helpers\Html;
use Yii;

/**
 * BaseIcon provides concrete implementation for Icon class
 *
 * includes : Flaticon, Awesome
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 0.58
 * @since 0.1
 */
class BaseIcon
{
    static function awesome($iconName, $tag = false, $options = [])
    {
        $prefix = 'fa ';

        return static::renderIcon($iconName, $tag, $options, $prefix);
    }

    static function flaticon($iconName, $tag = false, $options = [])
    {
        $prefix = 'flaticon-';

        return static::renderIcon($iconName, $tag, $options, $prefix);
    }

    protected static function renderIcon($iconName, $tag, $options = [], $prefix)
    {
        static::registerAsset($prefix);

        if($tag){
            $icon = Html::tag('i', '', ['class' => $prefix . $iconName]);
            $icon = Html::tag($tag, $icon, $options);
        }
        else{
            $options['class'] = $prefix . $iconName;
            $icon = Html::tag('i', '', $options);
        }

        return $icon;
    }

    protected static function registerAsset($iconAsset)
    {
        $view = Yii::$app->getView();

        switch ($iconAsset){
            case 'flaticon-' :
                FlaticonAsset::register($view);
                break;
            case 'fa ' :
                AwesomeAsset::register($view);
                break;
        }
    }
}