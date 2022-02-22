<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipocaja */

$this->title = 'Actualizar Tipo de caja: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipos de caja', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipocaja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
