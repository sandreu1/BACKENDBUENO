<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use app\models\Variedaduva;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
checkLogged();

$this->title = 'Parcelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parcela-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Parcela', ['create'], ['class' => 'btn btn-secondary']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel, 

        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute' => 'id',
                'value' => 'id',
                'label' => 'Nº Parcela'
            ],
            'kgEstimados',
            'kgDisponibles',
            ['attribute' => 'gradoMaduracion',
            'value' => 'gradotext',
            'filter'=>  \app\models\Parcela::$gradoOptions 
            ],
            ['attribute' => 'finca_id',
            'value' => 'finca.localización',
            'label' => 'Finca'
            ],
            ['attribute' => 'variedadUva_id',
            'value' => 'variedadUva.tipotext',
            'label' => 'Variedad Uva',
            'filter' => \app\models\Variedaduva::$variedadId
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Parcela $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
