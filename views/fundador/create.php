<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fundador */

$this->title = 'Crear Fundador';
$this->params['breadcrumbs'][] = ['label' => 'Fundadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fundador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
