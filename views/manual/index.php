<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ManualSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manuales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manual-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Manual', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idman',
            'nomManual',
            'descripcion',
            'edicion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
