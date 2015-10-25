<?php

namespace machour\yii2\adminlte\widgets;

use yii\base\Widget;
use yii\helpers\ArrayHelper;

class Callout extends Widget {

    public static $config = [
        'type' => 'info',
    ];

    public static function begin($config = [])
    {
        self::$config = ArrayHelper::merge(self::$config, $config);
        echo Html::beginTag('div', ['class' => 'callout callout-' . self::$config['type']]);
    }

    public static function end()
    {
        echo Html::endTag('div');
    }

}