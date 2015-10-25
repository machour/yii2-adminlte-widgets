<?php

namespace machour\yii2\adminlte\widgets;

use machour\flot\Chart;

class Flot extends Chart
{
    use BoxTrait;

    public function run() {

        if ($this->box) {
            self::boxBegin($this->box);
        }

        parent::run();

        if ($this->box) {
            self::boxEnd();
        }

    }
}