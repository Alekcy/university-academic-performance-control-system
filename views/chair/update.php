<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chair */

$this->title = 'Обновить Chair: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Chairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="chair-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
