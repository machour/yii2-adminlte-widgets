<?php

namespace machour\yii2\adminlte\widgets;

use yii\data\ArrayDataProvider;

class Table extends GridView
{

    public $data = [];

    public function init()
    {

        $this->dataProvider = new ArrayDataProvider([
            'allModels' => $this->data,
            'pagination' => false,
        ]);

        $this->layout = '{items}';

        parent::init();
    }

}