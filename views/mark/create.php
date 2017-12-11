<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mark */

$this->title = 'Создать оценку';
$this->params['breadcrumbs'][] = ['label' => 'Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mark-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
