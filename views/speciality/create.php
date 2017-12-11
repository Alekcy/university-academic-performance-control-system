<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Speciality */

$this->title = 'Создать Speciality';
$this->params['breadcrumbs'][] = ['label' => 'Specialities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="speciality-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
