<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicYear */

$this->title = 'Обновить год: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Academic Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="academic-year-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
