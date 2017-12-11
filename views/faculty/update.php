<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Faculty */

$this->title = 'Обновить Факультет: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="faculty-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
