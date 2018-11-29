<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fundador */

$this->title = 'Actualizar Fundador: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Fundadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFund, 'url' => ['view', 'id' => $model->idFund]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="fundador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
