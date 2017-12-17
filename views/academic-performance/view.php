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
            'chairName',
            [
                'attribute'=>'teacher.name',
                'label'=>'Преподаватель'
            ],
            [
                'attribute'=>'reportingType.name',
                'label'=>'Тип отчетности'
            ],
            [
                'attribute'=>'mark.name'
            ],
            [
                'attribute'=>'subject.name',
                'label'=>'Предмет'
            ],
            [
                'attribute'=>'group.name',
                'label'=>'Группа'
            ],
            [
                'attribute'=>'faculty.name',
                'label'=>'Факультет'
            ],
            [
                'attribute'=>'speciality.name',
                'label'=>'Специальность'
            ],

            'Date',
            'Hours_count',

        ],
    ]) ?>

</div>
