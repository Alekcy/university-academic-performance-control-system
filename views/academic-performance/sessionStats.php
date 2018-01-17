<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 13.01.2018
 * Time: 22:23
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii2assets\printthis\PrintThis;


$years = \yii\helpers\ArrayHelper::map(\app\models\AcademicYear::find()->all(),'id','name');
?>
<?=
PrintThis::widget([
    'htmlOptions' => [
        'id' => 'print',
        'btnClass' => 'btn btn-info',
        'btnId' => 'btnPrintThis',
        'btnText' => 'Печать',
        'btnIcon' => 'fa fa-print'
    ]
]);
?>

<div>
    <?php $form = ActiveForm::begin([
        'options' => [
            'enableAjaxValidation' => true,
            'enableClientValidation'=>true
        ]
    ]);?>

    <?= $form->field($model, 'id_academic_year')->dropDownList($years)->label('Год') ?>

    <?= $form->field($model, 'session')->dropDownList([0 => 'Зимняя', 1 => 'Летняя'])->label('Год') ?>

    <div class="form-group">
        <?= Html::submitButton('Отчет', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php if(isset($stats)) : ?>
        <div class="stats-table" id="print">
            <table class="table">
                <thead>
                    <th>Курс</th>
                    <th>Количество студентов</th>
                    <th>На отлично</th>
                    <th>На хорошо и отлично</th>
                    <th>На удовлетворительно</th>
                    <th>На смешанную оценку</th>
                    <th>Процент успеваемости</th>

                </thead>
                <tbody>
                <?php foreach ($stats as $item) : ?>

                    <tr>
                        <?php foreach ($item as $it):?>
                            <td><?=$it?></td>
                        <?php endforeach; ?>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif;?>
</div>