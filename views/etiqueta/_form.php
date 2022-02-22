<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Etiqueta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etiqueta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'formatoetiqueta')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'id_cliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
