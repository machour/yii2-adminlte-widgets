<?php

namespace machour\yii2\adminlte\widgets;

use yii\base\Widget;

class Timeline extends Widget
{
    use BoxTrait;

    /**
     * @var array the HTML attributes for the widget container tag.
     */
    public $options = [];
    /**
     * @var array the data to be displayed
     */
    public $data = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->box) {
            self::boxBegin($this->box);
        }

        echo Html::beginTag('ul', ['class' => 'timeline', 'id' => $this->options['id']]);

        foreach ($this->data as $datum) {
            echo Html::beginTag('li', ['class' => 'time-label']);
            echo Html::tag('span', $datum['date']);
            echo Html::endTag('li');

            foreach ($datum['items'] as $item) {
                echo Html::beginTag('li');
                echo Html::tag('i', null, ['class' => 'fa fa-envelope']);
                echo Html::beginTag('div', ['class' => 'timeline-item']);
                echo Html::beginTag('span', ['class' => 'time']);
                echo Html::tag('i', null, ['class' => 'fa fa-clock-o']);
                echo ' ' . $item['time'];
                echo Html::endTag('span');
                echo Html::tag('h3', $item['header'], ['class' => 'timeline-header']);
                echo Html::tag('div', $item['body'], ['class' => 'timeline-body']);
                echo Html::tag('div', $item['footer'], ['class' => 'timeline-footer']);
                echo Html::endTag('div');
                echo Html::endTag('li');
            }
        }

        echo Html::endTag('ul');

        if ($this->box) {
            self::boxEnd();
        }

    }

}