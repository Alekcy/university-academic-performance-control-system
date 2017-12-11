<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mark */

$this->title = 'Обновить оценку: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="mark-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
