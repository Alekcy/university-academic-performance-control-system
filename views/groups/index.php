<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\GroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить Groups', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'year',
            'id_speciality',
            'id_faculty',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
