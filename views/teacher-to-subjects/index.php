<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\TeacherToSubjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher To Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-to-subjects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить Teacher To Subjects', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_subject',
            'id_teacher',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
