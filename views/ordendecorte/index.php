<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\grid\CheckboxColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdendecorteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
checkLogged();
$this->title = 'Órdenes de corte';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordendecorte-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?=Html::beginForm(['ordendecorte/create'],'post');?>


    <p>
        <?= Html::a('Crear Orden de corte', ['create'], ['class' => 'btn btn-secondary']) ?>
    </pestado>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => CheckboxColumn::className(),'name'=>'seleccionar',
			'checkboxOptions' => function ($model, $key, $index, $column) {
						return ['value' => $model->id];
					     }],
            //'id',
            ['attribute' => 'id',
                'value' => 'id',
                'label' => 'Nº OrdendeCorte'
            ],
            'lote:ntext',
            'kgtotales',
            ['attribute' => 'estado',
            'value' => 'estadotext',
            'filter' => \app\models\Ordendecorte::$estadoOptions
            ],
            'fecha_alta',
            'fecha_salida',
            ['attribute' => 'finca_id',
            'value' => 'finca.localización',
            'label' => 'Finca'
            ],
            'parcela_id',
            ['attribute' => 'variedaduva_id',
            'value' => 'variedaduva.tipotext',
            'label' => 'Variedad Uva',
            'filter' => \app\models\Variedaduva::$variedadId
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Ordendecorte $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
<?= Html::endForm();?>


</div>

