<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Главная', 'icon' => 'file-code-o', 'url' => ['/']],
                    ['label' => 'Основное', 'options' => ['class' => 'header']],
                    ['label' => 'Успеваемость', 'icon' => 'file-code-o', 'url' => ['/academic-performance']],
                    ['label' => 'Студенты', 'icon' => 'file-code-o', 'url' => ['/student']],
                    ['label' => 'Группы', 'icon' => 'file-code-o', 'url' => ['/groups']],
                    ['label' => '', 'options' => ['class' => 'header']],
                    ['label' => 'Факультеты', 'icon' => 'file-code-o', 'url' => ['/faculty']],
                    ['label' => 'Специальности', 'icon' => 'file-code-o', 'url' => ['/speciality']],
                    ['label' => '', 'options' => ['class' => 'header']],
                    ['label' => 'Кафедры', 'icon' => 'file-code-o', 'url' => ['/chair']],
                    ['label' => 'Предметы', 'icon' => 'file-code-o', 'url' => ['/subject']],
                    ['label' => 'Преподаватели', 'icon' => 'file-code-o', 'url' => ['/teacher']],
                    ['label' => 'Оценки и отчетности', 'icon' => 'file-code-o', 'url' => ['#'], 'items' =>
                        [
                            ['label' => 'Вид оценки', 'icon' => '', 'url' => ['/mark']],
                            ['label' => 'Вид отчетности', 'icon' => '', 'url' => ['/reporting-type']],
                        ]
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
