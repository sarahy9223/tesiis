<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fundador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fundador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombFun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appatFun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apmatFun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexoFun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nacionalidad')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
