<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chair".
 *
 * @property integer $id
 * @property string $name
 *
 * @property AcademicPerformance[] $academicPerformances
 * @property ChairToTeacher[] $chairToTeachers
 * @property Subject[] $subjects
 * @property Teacher[] $teachers
 */
class Chair extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chair';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicPerformances()
    {
        return $this->hasMany(AcademicPerformance::className(), ['id_Chair' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChairToTeachers()
    {
        return $this->hasMany(ChairToTeacher::className(), ['id_chair' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['id_Chair' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['id_chair' => 'id']);
    }
}
