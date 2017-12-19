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
 * @property integer $id_group
 * @property integer $id_faculty
 * @property integer $id_speciality
 * @property string $Date
 * @property integer $Hours_count
 *
 * @property Chair $idChair
 * @property Teacher $idTeacher
 * @property ReportingType $idReportingType
 * @property Mark $idMark
 * @property Subject $idSubject
 * @property Student $idStudent
 * @property Groups $idGroup
 * @property Faculty $idFaculty
 * @property Speciality $idSpeciality
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
            [[ 'id_Teacher', 'id_Reporting_type', 'id_Mark', 'id_Subject', 'id_student', 'id_group', 'id_faculty', 'id_speciality', 'Hours_count'], 'integer'],
            [['Date'], 'safe'],
            [['id_Teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['id_Teacher' => 'id']],
            [['id_Reporting_type'], 'exist', 'skipOnError' => true, 'targetClass' => ReportingType::className(), 'targetAttribute' => ['id_Reporting_type' => 'id']],
            [['id_Mark'], 'exist', 'skipOnError' => true, 'targetClass' => Mark::className(), 'targetAttribute' => ['id_Mark' => 'id']],
            [['id_Subject'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['id_Subject' => 'id']],
            [['id_student'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['id_student' => 'id']],
            [['id_group'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['id_group' => 'id']],
            [['id_faculty'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::className(), 'targetAttribute' => ['id_faculty' => 'id']],
            [['id_speciality'], 'exist', 'skipOnError' => true, 'targetClass' => Speciality::className(), 'targetAttribute' => ['id_speciality' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_Teacher' => 'Id  Teacher',
            'id_Reporting_type' => 'Id  Reporting Type',
            'id_Mark' => 'Id  Mark',
            'id_Subject' => 'Id  Subject',
            'id_student' => 'Id Student',
            'id_group' => 'Id Group',
            'id_faculty' => 'Id Faculty',
            'id_speciality' => 'Id Speciality',
            'Date' => 'Дата',
            'Hours_count' => 'Часы',
            'chairName' => 'Кафедра'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'id_Teacher']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReportingType()
    {
        return $this->hasOne(ReportingType::className(), ['id' => 'id_Reporting_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMark()
    {
        return $this->hasOne(Mark::className(), ['id' => 'id_Mark']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'id_Subject']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'id_student']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'id_group']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaculty()
    {
        return $this->hasOne(Faculty::className(), ['id' => 'id_faculty']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpeciality()
    {
        return $this->hasOne(Speciality::className(), ['id' => 'id_speciality']);
    }


}
