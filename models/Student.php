<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_group
 * @property integer $id_speciality
 * @property integer $id_faculty
 *
 * @property AcademicPerformance[] $academicPerformances
 * @property Faculty $idFaculty
 * @property Speciality $idSpeciality
 * @property Groups $idGroup
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_group', 'id_speciality', 'id_faculty'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['id_faculty'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::className(), 'targetAttribute' => ['id_faculty' => 'id']],
            [['id_speciality'], 'exist', 'skipOnError' => true, 'targetClass' => Speciality::className(), 'targetAttribute' => ['id_speciality' => 'id']],
            [['id_group'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['id_group' => 'id']],
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
            'id_group' => 'Id Group',
            'id_speciality' => 'Id Speciality',
            'id_faculty' => 'Id Faculty',
            'nameFaculty'=>'Факультет',
            'nameSpeciality'=>'Специальность',
            'nameGroup'=>'Группа'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicPerformances()
    {
        return $this->hasMany(AcademicPerformance::className(), ['id_student' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFaculty()
    {
        return $this->hasOne(Faculty::className(), ['id' => 'id_faculty']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSpeciality()
    {
        return $this->hasOne(Speciality::className(), ['id' => 'id_speciality']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'id_group']);
    }

    public function getFaculty()
    {
        return $this->hasOne(Faculty::className(), ['id' => 'id_faculty']);
    }
    public function getSpeciality()
    {
        return $this->hasOne(Speciality::className(), ['id' => 'id_speciality']);
    }
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'id_group']);
    }
}
