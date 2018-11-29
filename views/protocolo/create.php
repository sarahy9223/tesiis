<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Protocolo */

$this->title = 'Create Protocolo';
$this->params['breadcrumbs'][] = ['label' => 'Protocolos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protocolo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
