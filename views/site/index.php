<?php

/* @var $this yii\web\View */
use yii\bootstrap\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php
    $blocks = [
    [
    'title' => 'Кафедры',
    'description' => 'Управление кафедрами',
    'label' => 'Кафедры',
    'icon' => 'cog',
    'url' => ['/config/index'],
    ]
    ];
    ?>

    <?php foreach ($blocks as $number => $block): ?>
    <?php if ($number % 3 == 0): ?>
    <?php if ($number != 0): ?>
</div>
<?php endif; ?>
<div class="row">
    <?php endif; ?>
    <div class="col-lg-4">
        <h3><?= $block['title'] ?></h3>
        <p><?= $block['description'] ?></p>
        <p><?= Html::a(Html::icon($block['icon']) . ' ' . $block['label'], $block['url'], ['class' => 'btn btn-default']) ?></p>
    </div>
    <?php endforeach; ?>
</div>
