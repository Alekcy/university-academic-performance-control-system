<?php

namespace app\models\Search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AcademicPerformance;

/**
 * AcademicPerformanceSearch represents the model behind the search form about `app\models\AcademicPerformance`.
 */
class AcademicPerformanceSearch extends AcademicPerformance
{

    public $chairName;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_Chair', 'id_Teacher', 'id_Reporting_type', 'id_Mark', 'id_Subject', 'id_student', 'id_group', 'id_faculty', 'id_speciality', 'Hours_count'], 'integer'],
            [['Date','chairName'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AcademicPerformance::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('chair');
        $dataProvider->sort->attributes['chairName'] = [
            'asc' => ['chair.name' => SORT_ASC],
            'desc' => ['chair.name' => SORT_DESC],
        ];
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_Chair' => $this->id_Chair,
            'id_Teacher' => $this->id_Teacher,
            'id_Reporting_type' => $this->id_Reporting_type,
            'id_Mark' => $this->id_Mark,
            'id_Subject' => $this->id_Subject,
            'id_student' => $this->id_student,
            'id_group' => $this->id_group,
            'id_faculty' => $this->id_faculty,
            'id_speciality' => $this->id_speciality,
            'Date' => $this->Date,
            'Hours_count' => $this->Hours_count,
        ]);

        $query->andFilterWhere(['like', 'chair.name', $this->chairName]);

        return $dataProvider;
    }
}
