<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Protocolo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="protocolo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomPro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caracP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechacread')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
