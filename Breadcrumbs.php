<?php

namespace machour\yii2\adminlte\widgets;

class Breadcrumbs extends \yii\widgets\Breadcrumbs
{

    public function init() {
        $this->homeLink = [
            'label' => Html::fa('dashboard') .  ' Home',
            'url' => ['site/index'],
            'encode' => false,
        ];
        parent::init();
    }
}