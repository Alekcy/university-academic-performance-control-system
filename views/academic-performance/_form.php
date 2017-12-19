<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicPerformance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-performance-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enableAjaxValidation' => true,
            'enableClientValidation'=>true

        ]
    ]);
     ?>

    <?php

    $teachers = \yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(),'id','name');

    $repTypes = \yii\helpers\ArrayHelper::map(\app\models\ReportingType::find()->all(),'id','name');

    $marks = \yii\helpers\ArrayHelper::map(\app\models\Mark::find()->all(),'id','name');

    $subjects = \yii\helpers\ArrayHelper::map(\app\models\Subject::find()->all(),'id','name');

    $students = \yii\helpers\ArrayHelper::map(\app\models\Student::find()->all(),'id','name');

    $years = \yii\helpers\ArrayHelper::map(\app\models\AcademicYear::find()->all(),'id','name');

    ?>

    <?= $form->field($model, 'id_Teacher')->dropDownList($teachers)->label('Преподаватель') ?>

    <?= $form->field($model, 'id_Reporting_type')->dropDownList($repTypes)->label('Тип отчетности') ?>

    <?= $form->field($model, 'id_Mark')->dropDownList($marks)->label('Оценка') ?>

    <?= $form->field($model, 'id_Subject')->dropDownList($subjects)->label('Предмет') ?>

    <?= $form->field($model, 'id_student')->dropDownList($students)->label('Студенты') ?>

    <?= $form->field($model, 'id_academic_year')->dropDownList($years)->label('Год') ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'Hours_count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
