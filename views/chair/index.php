<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\Chair */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chairs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chair-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Chair', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Chair_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
