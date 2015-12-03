<?php

namespace machour\yii2\adminlte\widgets;

class Html extends \yii\bootstrap\Html
{

    public static function badge($label, $bg = 'bg-blue')
    {
        return Html::tag('span', $label, ['class' => 'badge ' . $bg]);
    }

    public static function aLabel($label, $bg = 'info')
    {
        return Html::tag('span', $label, ['class' => 'label label-' . $bg]);
    }

    public static function pageHeader($string)
    {
        return Html::tag('h2', $string, ['class' => 'page-header']);
    }

    public static function fa($name, $tag = 'span', $options = [])
    {
        $options['prefix'] = 'fa fa-';
        $options['tag'] = $tag;
        return self::icon($name, $options);
    }

    public static function glyph($name, $tag = 'span', $options = [])
    {
        $options['tag'] = $tag;
        return self::icon($name, $options);
    }

    public static function ion($name, $tag = 'span', $options = [])
    {
        $options['prefix'] = 'ion ion-';
        $options['tag'] = $tag;
        return self::icon($name, $options);
    }

}