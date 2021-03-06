<?php

/* @var $this yii\web\View */
use yii\bootstrap\Html;

$this->title = '';
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
        ],
        [
            [
                'title' => 'Успеваемость',
                'description' => 'Управление успеваемостью',
                'label' => 'Успеваемость',
                'icon' => '',
                'url' => ['/academic-performance/index'],
            ],
            [
                'title' => 'Академический год',
                'description' => 'Управление',
                'label' => 'Академический год',
                'icon' => '',
                'url' => ['/academic-year/index'],
            ],
        ],
    ];
    ?>


<?php foreach ($blocks as $number => $block): ?>
    <div class="row box main-panel-block">
    <?php foreach ($block as $item):?>
            <div class="col-lg-4">
                <h3><?= $item['title'] ?></h3>
                <p><?= $item['description'] ?></p>
                <p><?= Html::a(Html::icon($item['icon']) . ' ' . $item['label'], $item['url'], ['class' => 'btn btn-flat bg-purple']) ?></p>
            </div>
    <?php endforeach;?>
    </div>
    <?php endforeach; ?>

