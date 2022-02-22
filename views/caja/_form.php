<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Caja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caja-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'kg')->textInput() ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-1">
            <?= $form->field($model, 'palet')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'tipoCaja_id')->textInput() ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-1">
            <?= $form->field($model, 'sector_id')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'ordenDeCorte_id')->dropDownList(app\models\Ordendecorte::lookup()) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-1">
            <?= $form->field($model, 'variedaduva_id')->dropDownList(app\models\Variedaduva::$variedadId) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
