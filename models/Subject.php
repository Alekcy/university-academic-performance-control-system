<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_Chair
 *
 * @property AcademicPerformance[] $academicPerformances
 * @property Chair $idChair
 * @property TeacherToSubjects[] $teacherToSubjects
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Chair'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['id_Chair'], 'exist', 'skipOnError' => true, 'targetClass' => Chair::className(), 'targetAttribute' => ['id_Chair' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'id_Chair' => 'Id  Chair',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicPerformances()
    {
        return $this->hasMany(AcademicPerformance::className(), ['id_Subject' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdChair()
    {
        return $this->hasOne(Chair::className(), ['id' => 'id_Chair']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherToSubjects()
    {
        return $this->hasMany(TeacherToSubjects::className(), ['id_subject' => 'id']);
    }
}
