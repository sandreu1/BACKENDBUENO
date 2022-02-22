<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Finca */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="finca-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <?= $form->field($model, 'localización')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
