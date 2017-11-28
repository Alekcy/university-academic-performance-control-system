<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicPerformance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-performance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Chair')->textInput() ?>

    <?= $form->field($model, 'id_Teacher')->textInput() ?>

    <?= $form->field($model, 'id_Reporting_type')->textInput() ?>

    <?= $form->field($model, 'id_Mark')->textInput() ?>

    <?= $form->field($model, 'id_Subject')->textInput() ?>

    <?= $form->field($model, 'id_student')->textInput() ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'Hours_count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
