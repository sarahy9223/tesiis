<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Manual */

$this->title = 'Actualizar Manual: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Manuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idman, 'url' => ['view', 'id' => $model->idman]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="manual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
