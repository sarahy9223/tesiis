<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FundadorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fundador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idFund') ?>

    <?= $form->field($model, 'nombFun') ?>

    <?= $form->field($model, 'appatFun') ?>

    <?= $form->field($model, 'apmatFun') ?>

    <?= $form->field($model, 'sexoFun') ?>

    <?php // echo $form->field($model, 'nacionalidad') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-info']) ?>
        <?= Html::resetButton('Reiniciar', ['class' => 'btn btn-secundary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
