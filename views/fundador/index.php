<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FundadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fundadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fundador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fundador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idFund',
            'nombFun',
            'appatFun',
            'apmatFun',
            'sexoFun',
            'nacionalidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
