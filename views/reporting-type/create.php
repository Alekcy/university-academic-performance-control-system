<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReportingType */

$this->title = 'Создать Reporting Type';
$this->params['breadcrumbs'][] = ['label' => 'Reporting Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporting-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
