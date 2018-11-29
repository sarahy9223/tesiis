<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProtocoloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="protocolo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPro') ?>

    <?= $form->field($model, 'nomPro') ?>

    <?= $form->field($model, 'caracP') ?>

    <?= $form->field($model, 'fechacread') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
