<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicPerformance */

$this->title = 'Обновить успеваемость: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Academic Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="academic-performance-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
