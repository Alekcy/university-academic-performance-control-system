<?php

/* @var $this yii\web\View */
use yii\bootstrap\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php
    $blocks = [
        [
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
                'title' => 'Кафедры',
                'description' => 'Управление кафедрами',
                'label' => 'Кафедры',
                'icon' => '',
                'url' => ['/chair/index'],
            ],
        ],
        [
            [
                'title' => 'Группы',
                'description' => 'Управление группами',
                'label' => 'Группы',
                'icon' => '',
                'url' => ['/groups/index'],
            ],
            [
                'title' => 'Студенты',
                'description' => 'Управление студентами',
                'label' => 'Студенты',
                'icon' => '',
                'url' => ['/student/index'],
            ],
        ],
        [
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
        ],
        [
            [
                'title' => 'Успеваемость',
                'description' => 'Управление успеваемостью',
                'label' => 'Успеваемость',
                'icon' => '',
                'url' => ['/academic-performance/index'],
            ],
        ],
    ];
    ?>


<?php foreach ($blocks as $number => $block): ?>
    <div class="row">
    <?php foreach ($block as $item):?>
            <div class="col-lg-4">
                <h3><?= $item['title'] ?></h3>
                <p><?= $item['description'] ?></p>
                <p><?= Html::a(Html::icon($item['icon']) . ' ' . $item['label'], $item['url'], ['class' => 'btn btn-default']) ?></p>
            </div>
    <?php endforeach;?>
    </div><hr>
    <?php endforeach; ?>

