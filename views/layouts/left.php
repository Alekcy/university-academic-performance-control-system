<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Главная', 'icon' => '', 'url' => ['/']],
                    ['label' => 'Основное', 'options' => ['class' => 'header']],
                    ['label' => 'Успеваемость', 'icon' => 'address-card', 'url' => ['/academic-performance']],
                    ['label' => 'Студенты', 'icon' => 'graduation-cap', 'url' => ['/student']],
                    ['label' => 'Группы', 'icon' => 'users', 'url' => ['/groups']],
                    ['label' => '', 'options' => ['class' => 'header']],
                    ['label' => 'Факультеты', 'icon' => 'university', 'url' => ['/faculty']],
                    ['label' => 'Специальности', 'icon' => 'wrench', 'url' => ['/speciality']],
                    ['label' => '', 'options' => ['class' => 'header']],
                    ['label' => 'Кафедры', 'icon' => 'paragraph', 'url' => ['/chair']],
                    ['label' => 'Предметы', 'icon' => 'file-code-o', 'url' => ['/subject']],
                    ['label' => 'Преподаватели', 'icon' => 'user-circle', 'url' => ['/teacher']],
                    ['label' => 'Оценки и отчетности', 'icon' => 'eercast', 'url' => ['#'], 'items' =>
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
