<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Variedaduva */

$this->title = 'Crear Variedad de uva';
$this->params['breadcrumbs'][] = ['label' => 'Variedades de uva', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="variedaduva-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
