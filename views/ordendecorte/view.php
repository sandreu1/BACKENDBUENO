<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ordendecorte */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Órdenes de corte', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ordendecorte-view">

    <h1><?= 'Órden de corte: ' . Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-secondary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿ Estás seguro de que quieres eliminar esta órden de corte ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'lote:ntext',
            'kgtotales',
            'estado',
            'fecha_alta',
            'fecha_salida',
            'finca_id',
            'parcela_id',
            'variedaduva_id',
        ],
    ]) ?>

</div>
