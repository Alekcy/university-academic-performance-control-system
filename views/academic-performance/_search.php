<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\AcademicPerformanceSearch */
/* @var $form yii\widgets\ActiveForm */

    $chairs = \yii\helpers\ArrayHelper::map(\app\models\Chair::find()->all(),'id','name');

    $teachers = \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(),'id','name');

    $repTypes = \yii\helpers\ArrayHelper::map(\app\models\ReportingType::find()->all(),'id','name');

    $marks = \yii\helpers\ArrayHelper::map(\app\models\Mark::find()->all(),'id','name');

    $subjects = \yii\helpers\ArrayHelper::map(\app\models\Subject::find()->all(),'id','name');

    $students = \yii\helpers\ArrayHelper::map(\app\models\Student::find()->all(),'id','name');

    $groups = \yii\helpers\ArrayHelper::map(\app\models\Groups::find()->all(),'id','name');

    $faculties = \yii\helpers\ArrayHelper::map(\app\models\Faculty::find()->all(),'id','name');

    $specialities = \yii\helpers\ArrayHelper::map(\app\models\Speciality::find()->all(),'id','name');

?>

<div class="academic-performance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'budget')->dropDownList([0=>'Бюджет',1=>'Коммерция'], ['prompt'=>'- Выберите -'])->label('Бюджет/Коммерция') ?>

                <?= $form->field($model, 'id_Teacher')->dropDownList($teachers, ['prompt'=>'- Выберите -'])->label('Преподаватель') ?>

                <?= $form->field($model, 'id_Reporting_type')->dropDownList($repTypes, ['prompt'=>'- Выберите -'])->label('Тип отчетности') ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'id_Mark')->dropDownList($marks, ['prompt'=>'- Выберите -'])->label('Оценка') ?>

                <?= $form->field($model, 'id_Subject')->dropDownList($subjects, ['prompt'=>'- Выберите -'])->label('Предмет') ?>

                <?= $form->field($model, 'id_student')->dropDownList($students, ['prompt'=>'- Выберите -'])->label('Студенты') ?>

            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'id_group')->dropDownList($groups, ['prompt'=>'- Выберите -'])->label('Группа') ?>

                <?= $form->field($model, 'id_faculty')->dropDownList($faculties, ['prompt'=>'- Выберите -'])->label('Факультет') ?>

                <?= $form->field($model, 'id_speciality')->dropDownList($specialities, ['prompt'=>'- Выберите -'])->label('Специальность') ?>

            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
