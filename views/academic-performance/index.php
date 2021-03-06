<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \yii2assets\printthis\PrintThis;

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
    <p>
        <?= Html::a('Статистика за сессию', ['session-stats'], ['class' => 'btn btn-info']) ?>
    </p>
    <?=
     PrintThis::widget([
        'htmlOptions' => [
            'id' => 'PrintThis',
            'btnClass' => 'btn btn-info',
            'btnId' => 'btnPrintThis',
            'btnText' => 'Печать',
            'btnIcon' => 'fa fa-print'
        ],
        'options' => [
            'debug' => false,
            'importCSS' => true,
            'importStyle' => false,
            'loadCSS' => "print.css",
            'pageTitle' => "",
            'removeInline' => false,
            'printDelay' => 333,
            'header' => null,
            'formValues' => true,
        ]
    ]);
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'student.name',
                'label'=>'Студент'
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
                'attribute'=>'teacher.name',
                'label'=>'Преподаватель'
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
            [
                'attribute'=>'academicYear.name',
                'label'=>'Год'
            ],


            'Date',
            'Hours_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <div id="PrintThis">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                [
                    'attribute'=>'teacher.name',
                    'label'=>'Преподаватель'
                ],
                [
                    'attribute'=>'student.name',
                    'label'=>'Студент'
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
        ]); ?>
    </div>
</div>
