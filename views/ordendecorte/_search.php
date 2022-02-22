<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrdendecorteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordendecorte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lote') ?>

    <?= $form->field($model, 'kgtotales') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'fecha_alta') ?>

    <?php // echo $form->field($model, 'fecha_salida') ?>

    <?php // echo $form->field($model, 'finca_id') ?>

    <?php // echo $form->field($model, 'parcela_id') ?>

    <?php // echo $form->field($model, 'variedaduva_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
