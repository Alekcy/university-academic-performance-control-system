<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_chair
 *
 * @property AcademicPerformance[] $academicPerformances
 * @property ChairToTeacher[] $chairToTeachers
 * @property Chair $idChair
 * @property TeacherToSubjects[] $teacherToSubjects
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_chair'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['id_chair'], 'exist', 'skipOnError' => true, 'targetClass' => Chair::className(), 'targetAttribute' => ['id_chair' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'id_chair' => 'Id Chair',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicPerformances()
    {
        return $this->hasMany(AcademicPerformance::className(), ['id_Teacher' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChairToTeachers()
    {
        return $this->hasMany(ChairToTeacher::className(), ['id_teacher' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChair()
    {
        return $this->hasOne(Chair::className(), ['id' => 'id_chair']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherToSubjects()
    {
        return $this->hasMany(TeacherToSubjects::className(), ['id_teacher' => 'id']);
    }
}
