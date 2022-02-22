<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipocajaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
checkLogged();

$this->title = 'Tipos de caja';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipocaja-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Tipo de caja', ['create'], ['class' => 'btn btn-secondary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute' => 'id',
                'value' => 'id',
                'label' => 'Nº TipoCaja'
            ],
            ['attribute' => 'tipo',
            'value' => 'tipotext',
            'filter' => app\models\Tipocaja::$tipoOptions,
            'label' => 'Tipo de caja'
            ],
            'descripcion:ntext',
            'kg',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Tipocaja $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
