<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-1">
            <?= $form->field($model, 'contraseña')->passwordInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-1">
            <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'tipo')->dropDownList(app\models\Usuario::$tipoOptions,['prompt'=>'Selecciona...']) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-1">
            <?= $form->field($model, 'finca_id')->dropDownList(app\models\Finca::lookup(),['prompt'=>'Selecciona...']) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
