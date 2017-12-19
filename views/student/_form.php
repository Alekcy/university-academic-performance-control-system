<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?php
    $groups = \app\models\Groups::find()->all();
    $groups = \yii\helpers\ArrayHelper::map($groups,'id','name');
    print_r($groups);
    ?>

    <?= $form->field($model, 'id_group')->dropDownList($groups)->label('Группа') ?>

    <?= $form->field($model, 'budget')->dropDownList([0=>'Бюджет',1=>'Коммерция'])->label('Группа') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
