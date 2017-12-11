<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AcademicPerformance */

$this->title = 'Создать успеваемость';
$this->params['breadcrumbs'][] = ['label' => 'Academic Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-performance-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
