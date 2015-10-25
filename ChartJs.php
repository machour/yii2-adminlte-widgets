<?php

namespace machour\yii2\adminlte\widgets;

class ChartJs extends \dosamigos\chartjs\ChartJs {
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