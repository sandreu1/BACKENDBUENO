<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CajaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caja-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kg') ?>

    <?= $form->field($model, 'palet') ?>

    <?= $form->field($model, 'tipoCaja_id') ?>

    <?= $form->field($model, 'sector_id') ?>

    <?php // echo $form->field($model, 'ordenDeCorte_id') ?>

    <?php // echo $form->field($model, 'variedaduva_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
