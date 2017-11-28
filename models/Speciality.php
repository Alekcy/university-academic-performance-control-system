<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "speciality".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_faculty
 *
 * @property Groups[] $groups
 * @property Faculty $idFaculty
 * @property Student[] $students
 */
class Speciality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'speciality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_faculty'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['id_faculty'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::className(), 'targetAttribute' => ['id_faculty' => 'id']],
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
            'id_faculty' => 'Id Faculty',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Groups::className(), ['id_specialty' => 'id']);
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
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['id_speciality' => 'id']);
    }
}
