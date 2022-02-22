<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Parcela */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Parcelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="parcela-view">

    <h1><?= 'Parcela: ' . Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-secondary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro de que quieres eliminar esta parcela ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kgEstimados',
            'kgDisponibles',
            'gradoMaduracion',
            'finca_id',
            'variedadUva_id',
        ],
    ]) ?>

</div>
