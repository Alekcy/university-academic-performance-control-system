<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chair */

$this->title = 'Create Chair';
$this->params['breadcrumbs'][] = ['label' => 'Chairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chair-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
