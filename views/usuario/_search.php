<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'usuario') ?>

    <?= $form->field($model, 'contraseña') ?>

    <?= $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'finca_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
