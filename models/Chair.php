<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chair".
 *
 * @property integer $ID
 * @property string $Chair_name
 *
 * @property AcademicPerformance[] $academicPerformances
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
            [['ID'], 'required'],
            [['ID'], 'integer'],
            [['Chair_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Chair_name' => 'Chair Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicPerformances()
    {
        return $this->hasMany(AcademicPerformance::className(), ['ID_Chair' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['ID_Chair' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['ID_Chair' => 'ID']);
    }
}
