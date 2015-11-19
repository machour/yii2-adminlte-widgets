<?php

namespace machour\yii2\adminlte\widgets;

use yii\grid\GridView as BaseGridView;

class GridView extends BaseGridView
{
    use BoxTrait;

    public $type = 'table-bordered';

    public $responsive = true;

    public $layout = '{items}
    <div>
        <div class="pull-left">{summary}</div>
        <div class="pull-right">{pager}</div>
        <div style="clear: both;"></div>
    </div>';

    public function init()
    {
        $this->tableOptions = ['class' => 'table ' . $this->type];

        parent::init();
    }

    public function run() {

        if ($this->box) {
            if ($this->responsive) {
                $this->box['body']['class'] = 'table-responsive';
            }
            self::boxBegin($this->box);
        } elseif ($this->responsive) {
            Html::beginTag('div', ['class' => 'table-responsive']);
        }

        parent::run();

        if ($this->box) {
            self::boxEnd();
        } elseif ($this->responsive) {
            Html::endTag('div');
        }

    }

}