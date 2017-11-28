<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "academic_performance".
 *
 * @property integer $id
 * @property integer $id_Chair
 * @property integer $id_Teacher
 * @property integer $id_Reporting_type
 * @property integer $id_Mark
 * @property integer $id_Subject
 * @property integer $id_student
 * @property string $Date
 * @property integer $Hours_count
 *
 * @property Chair $idChair
 * @property Teacher $idTeacher
 * @property ReportingType $idReportingType
 * @property Mark $idMark
 * @property Subject $idSubject
 * @property Student $idStudent
 */
class AcademicPerformance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'academic_performance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Chair', 'id_Teacher', 'id_Reporting_type', 'id_Mark', 'id_Subject', 'id_student', 'Hours_count'], 'integer'],
            [['Date'], 'safe'],
            [['id_Chair'], 'exist', 'skipOnError' => true, 'targetClass' => Chair::className(), 'targetAttribute' => ['id_Chair' => 'id']],
            [['id_Teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['id_Teacher' => 'id']],
            [['id_Reporting_type'], 'exist', 'skipOnError' => true, 'targetClass' => ReportingType::className(), 'targetAttribute' => ['id_Reporting_type' => 'id']],
            [['id_Mark'], 'exist', 'skipOnError' => true, 'targetClass' => Mark::className(), 'targetAttribute' => ['id_Mark' => 'id']],
            [['id_Subject'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['id_Subject' => 'id']],
            [['id_student'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['id_student' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_Chair' => 'Id  Chair',
            'id_Teacher' => 'Id  Teacher',
            'id_Reporting_type' => 'Id  Reporting Type',
            'id_Mark' => 'Id  Mark',
            'id_Subject' => 'Id  Subject',
            'id_student' => 'Id Student',
            'Date' => 'Date',
            'Hours_count' => 'Hours Count',
        ];
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
    public function getIdTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'id_Teacher']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdReportingType()
    {
        return $this->hasOne(ReportingType::className(), ['id' => 'id_Reporting_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMark()
    {
        return $this->hasOne(Mark::className(), ['id' => 'id_Mark']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'id_Subject']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'id_student']);
    }
}
