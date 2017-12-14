<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\AcademicPerformanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Успеваемость';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-performance-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'chairName',
            'id_Chair',
            'id_Teacher',
            'id_Reporting_type',
            'id_Mark',
            // 'id_Subject',
            // 'id_student',
            // 'id_group',
            // 'id_faculty',
            // 'id_speciality',
            // 'Date',
            // 'Hours_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
