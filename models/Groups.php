<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property integer $id
 * @property string $name
 * @property integer $year
 * @property integer $id_speciality
 * @property integer $id_faculty
 *
 * @property Faculty $idFaculty
 * @property Speciality $idSpeciality
 * @property Student[] $students
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year', 'id_speciality', 'id_faculty','course'], 'integer'],
            [['name'], 'string', 'max' => 20],
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
            'name' => 'Название',
            'year' => 'Год',
            'id_speciality' => 'Id Speciality',
            'id_faculty' => 'Id Faculty',
            'course'=>'Курс'
        ];
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['id_group' => 'id']);
    }

    public function  getSpecialityIdById($id)
    {
        $group = $this->find()->where(['id'=>$id])->one();
        return $group->id_speciality;
    }

}
