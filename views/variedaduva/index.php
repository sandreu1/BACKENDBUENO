<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
checkLogged();

$this->title = 'Variedad de uvas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="variedaduva-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Variedad de uva', ['create'], ['class' => 'btn btn-secondary']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute' => 'id',
                'value' => 'id',
                'label' => 'Nº VariedadUva'
            ],
            ['attribute' => 'tipo',
            'value' => 'tipotext',
            ],
            'duracion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Variedaduva $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
