<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CajaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
checkLogged();

$this->title = 'Cajas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caja-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Caja', ['create'], ['class' => 'btn btn-secondary']) ?>
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
                'label' => 'Nº Caja'
            ],
            'kg',
            'palet',
            ['attribute' => 'tipoCaja_id',
            'value' => 'tipoCaja.kg',
            'label' => 'Tipo Caja'
            ],
            ['attribute' => 'sector_id',
            'value' => 'sector.tipotext',
            'filter' => app\models\Sector::$tipoOptions,
            'label' => 'Sector'
            ],
            ['attribute' => 'ordenDeCorte_id',
            'value' => 'ordenDeCorte.lote',
            'label' => 'Lote'
            ],
            ['attribute' => 'variedaduva_id',
            'value' => 'variedaduva.tipotext',
            'label' => 'Variedad Uva',
            'filter' => \app\models\Variedaduva::$variedadId
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Caja $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
