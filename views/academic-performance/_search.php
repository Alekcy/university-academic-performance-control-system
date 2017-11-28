<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\AcademicPerformanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-performance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_Chair') ?>

    <?= $form->field($model, 'id_Teacher') ?>

    <?= $form->field($model, 'id_Reporting_type') ?>

    <?= $form->field($model, 'id_Mark') ?>

    <?php // echo $form->field($model, 'id_Subject') ?>

    <?php // echo $form->field($model, 'id_student') ?>

    <?php // echo $form->field($model, 'Date') ?>

    <?php // echo $form->field($model, 'Hours_count') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
