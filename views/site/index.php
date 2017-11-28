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
            'icon' => '',
            'url' => ['/chair/index'],
        ],
        [
            'title' => 'Группы',
            'description' => 'Управление группами',
            'label' => 'Группы',
            'icon' => '',
            'url' => ['/groups/index'],
        ],
        [
            'title' => 'Факультеты',
            'description' => 'Управление факультетами',
            'label' => 'Факультеты',
            'icon' => '',
            'url' => ['/faculty/index'],
        ],
        [
            'title' => 'Специальности',
            'description' => 'Управление специальностями',
            'label' => 'Специальности',
            'icon' => '',
            'url' => ['/speciality/index'],
        ],
        [
            'title' => 'Вид оценки',
            'description' => 'Управление оценками',
            'label' => 'Вид оценки',
            'icon' => '',
            'url' => ['/mark/index'],
        ],
        [
            'title' => 'Вид отчетности',
            'description' => 'Управление типом отчетности',
            'label' => 'Вид отчетности',
            'icon' => '',
            'url' => ['/reporting-type/index'],
        ],
        [
            'title' => 'Студенты',
            'description' => 'Управление студентами',
            'label' => 'Студенты',
            'icon' => '',
            'url' => ['/student/index'],
        ],
        [
            'title' => 'Преподаватели',
            'description' => 'Управление преподавателями',
            'label' => 'Преподаватели',
            'icon' => '',
            'url' => ['/teacher/index'],
        ],
        [
            'title' => 'Предметы',
            'description' => 'Управление предметами',
            'label' => 'Предметы',
            'icon' => '',
            'url' => ['/subject/index'],
        ],
        [
            'title' => 'Успеваемость',
            'description' => 'Управление успеваемостью',
            'label' => 'Успеваемость',
            'icon' => '',
            'url' => ['/academic-performance/index'],
        ],
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
