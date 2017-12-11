<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicPerformance */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Academic Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-performance-view">

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_Chair',
            'id_Teacher',
            'id_Reporting_type',
            'id_Mark',
            'id_Subject',
            'id_student',
            'id_group',
            'id_faculty',
            'id_speciality',
            'Date',
            'Hours_count',
        ],
    ]) ?>

</div>
