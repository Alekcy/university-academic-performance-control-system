<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Speciality */

$this->title = 'Обновить специальность: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Specialities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="speciality-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
