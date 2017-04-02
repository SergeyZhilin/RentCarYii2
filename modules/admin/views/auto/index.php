<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Трансортные средства';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Transport', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
        [
                'attribute' => 'type_id',
                'value' => function($data) {
                    return $data->type->name;
                },
        ],
            'name',
            'price',
            [
                'attribute' => 'hit',
                'value' => function($data) {
                    return !$data->hit ? '<span class="text-danger">Нет</span>' :
                                         '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'new',
                'value' => function($data) {
                    return !$data->new ? '<span class="text-danger">Нет</span>' :
                                         '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'sale',
                'value' => function($data) {
                    return !$data->sale ? '<span class="text-danger">Нет</span>' :
                                          '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'Availability',
                'value' => function($data) {
                    return !$data->Availability ? '<span class="text-danger">Нет в наличие</span>' :
                                                  '<span class="text-success">Есть в наличие</span>';
                },
                'format' => 'html',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
