<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
checkLogged();

$this->title = 'Fincas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="finca-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Finca', ['create'], ['class' => 'btn btn-secondary']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel, 

        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'id',
                'value' => 'id',
                'label' => 'Nº Finca'
            ],
            //'id',
            'localización',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Finca $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
