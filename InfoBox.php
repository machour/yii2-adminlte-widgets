<?php

namespace machour\yii2\adminlte\widgets;

use yii\base\Widget;

class InfoBox extends Widget {

    public $bg = 'bg-aqua';
    public $bgFill = false;
    public $text = 'Text';
    public $number = 0;
    public $icon;
    public $progress;
    public $progressText;

    public function run() {

        echo Html::beginTag('div', ['class' => 'info-box ' . ($this->bgFill ? $this->bg : '')]);

        if (!$this->icon) {
            $this->icon = Html::fa('question', 'i');
        }

        echo Html::tag(
            'span',
            $this->icon,
            ['class' => 'info-box-icon ' . ($this->bgFill ? '' : $this->bg)]
        );

        echo Html::beginTag('div', ['class' => 'info-box-content']);

        echo Html::tag(
            'span',
            $this->text,
            ['class' => 'info-box-text']
        );
        echo Html::tag(
            'span',
            $this->number,
            ['class' => 'info-box-number']
        );

        if ($this->progress !== null) {
            echo Html::tag('div',
                Html::tag('div', '', ['class' => 'progress-bar', 'style' => 'width: ' . $this->progress . '%;']),
                ['class' => 'progress']
            );

            if (!empty($this->progressText)) {
                echo Html::tag('div', $this->progressText, ['class' => 'progress-description']);
            }
        }


        echo Html::endTag('div');

        echo Html::endTag('div');
    }


}