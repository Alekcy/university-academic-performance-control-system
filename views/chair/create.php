<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chair */

$this->title = 'Создать Chair';
$this->params['breadcrumbs'][] = ['label' => 'Chairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chair-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
