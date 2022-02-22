<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parcela */

$this->title = 'Actualizar Parcela: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Parcelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="parcela-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
