<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordendecorte */

$this->title = 'Crear Orden de corte';
$this->params['breadcrumbs'][] = ['label' => 'Órdenes de corte', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordendecorte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
