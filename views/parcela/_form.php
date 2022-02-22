<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Parcela */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parcela-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'kgEstimados')->textInput() ?>
        </div>
        <div class="col-4 offset-1">
            <?= $form->field($model, 'kgDisponibles')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'finca_id')->dropDownList(app\models\Finca::lookup(),['prompt'=>'Selecciona...']) ?>
        </div>
        <div class="col-4 offset-1">
            <?= $form->field($model, 'variedadUva_id')->dropDownList(app\models\Variedaduva::$variedadId,['prompt'=>'Selecciona...']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'gradoMaduracion')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
