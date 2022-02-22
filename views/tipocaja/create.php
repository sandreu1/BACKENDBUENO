<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipocaja */

$this->title = 'Crear Tipo de caja';
$this->params['breadcrumbs'][] = ['label' => 'Tipos de caja', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipocaja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
