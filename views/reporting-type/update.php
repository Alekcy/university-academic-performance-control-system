<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReportingType */

$this->title = 'Обновить тип отчетности: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Reporting Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="reporting-type-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
