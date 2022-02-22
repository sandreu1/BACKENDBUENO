<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Variedaduva */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="variedaduva-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'tipo')->dropDownList(app\models\Variedaduva::$tipoOptions) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'duracion')->textInput(['maxlength' => true]) ?>
        </div>
        </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
