<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Ordendecorte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordendecorte-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'lote')->textInput() ?>
        </div>
        <div class="col-lg-4 offset-lg-1">
            <?= $form->field($model, 'kgtotales')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'fecha_alta')->widget(DateControl::classname(),['value' => time(), 'type' => DateControl::FORMAT_DATE]);  ?>
        </div>
        <div class="col-lg-4 offset-lg-1">
            <?= $form->field($model, 'fecha_salida')->widget(DateControl::classname(),['pluginOptions' => ['autoclose'=>true]]);  ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'estado')->dropDownList(app\models\Ordendecorte::$estadoOptions,['prompt' => 'Selecciona el estado...']) ?>
        </div>
        <div class="col-lg-4 offset-lg-1">
            <?= $form->field($model, 'variedaduva_id')->dropDownList(app\models\Variedaduva::$variedadId,['prompt' => 'Selecciona la variedad de la uva...']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'finca_id')->dropDownList(app\models\Finca::lookup(),['prompt' => 'Selecciona la ubicación de la finca...']) ?>
        </div>
        <div class="col-lg-4 offset-lg-1">
            <?= $form->field($model, 'parcela_id')->dropDownList(app\models\Parcela::lookup()) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
