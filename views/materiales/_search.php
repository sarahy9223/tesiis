<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materiales-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idmat') ?>

    <?= $form->field($model, 'nomMat') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'unidad') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-info']) ?>
        <?= Html::resetButton('Reiniciar', ['class' => 'btn btn-secundary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
