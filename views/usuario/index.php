<?php

use yii\helpers\Url;
use app\models\Finca;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
checkLogged();

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Usuario', ['create'], ['class' => 'btn btn-secondary']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel, 
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
            ['attribute' => 'tipo',
                'value' => 'tipotext',
                'label' => 'Tipo',
                'filter'=>  \app\models\Usuario::$tipoOptions
            ],
            'usuario',
            //'contraseña',
            'nombre',
            'correo',
            ['attribute' => 'finca_id',
                'label' => 'Finca',
                'value' => 'finca.localización',
                'filter' => Finca::lookup(),
            ],
            'token',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Usuario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
