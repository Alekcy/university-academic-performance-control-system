<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "academic_year".
 *
 * @property integer $id
 * @property string $name
 *
 * @property AcademicPerformance[] $academicPerformances
 */
class AcademicYear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'academic_year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Годы',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicPerformances()
    {
        return $this->hasMany(AcademicPerformance::className(), ['id_academic_year' => 'id']);
    }
}
