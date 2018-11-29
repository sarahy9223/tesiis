<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManualSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manual-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idman') ?>

    <?= $form->field($model, 'nomManual') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'edicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-info']) ?>
        <?= Html::resetButton('Reiniciar', ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
