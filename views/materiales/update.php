<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materiales */

$this->title = 'Actualizar Materiales: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Materiales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmat, 'url' => ['view', 'id' => $model->idmat]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="materiales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
