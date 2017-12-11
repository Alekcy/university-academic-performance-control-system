<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReportingType */

$this->title = 'Создать тип отчетности';
$this->params['breadcrumbs'][] = ['label' => 'Reporting Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporting-type-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
