<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reporting_type".
 *
 * @property integer $id
 * @property string $name
 *
 * @property AcademicPerformance[] $academicPerformances
 */
class ReportingType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reporting_type';
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
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicPerformances()
    {
        return $this->hasMany(AcademicPerformance::className(), ['id_Reporting_type' => 'id']);
    }
}
