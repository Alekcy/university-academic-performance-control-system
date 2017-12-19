<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AcademicYear */

$this->title = 'Создать год';
$this->params['breadcrumbs'][] = ['label' => 'Academic Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-year-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
