<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataTest;

/**
 * DataTestSearch represents the model behind the search form of `app\models\DataTest`.
 */
class DataTestSearch extends DataTest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['vstdate', 'data_test1', 'note1', 'note1_1', 'note1_2', 'data_test2', 'note2', 'note2_1', 'note2_2', 'data_test3', 'note3', 'note3_1', 'note3_2', 'data_test4', 'note4', 'note4_1', 'note4_2', 'data_test5', 'note5', 'note5_1', 'note5_2', 'data_test6', 'note6', 'note6_1', 'note6_2', 'data_test7', 'note7', 'note7_1', 'note7_2', 'data_test8', 'note8', 'note8_1', 'note8_2', 'data_test9', 'note9', 'note9_1', 'note9_2', 'data_test10', 'note10', 'note10_1', 'note10_2', 'data_test11', 'note11', 'note11_1', 'note11_2', 'data_test12', 'note12', 'note12_1', 'note12_2', 'note', 'checkuser_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = DataTest::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'vstdate' => $this->vstdate,
        ]);

        $query->andFilterWhere(['like', 'data_test1', $this->data_test1])
            ->andFilterWhere(['like', 'note1', $this->note1])
            ->andFilterWhere(['like', 'note1_1', $this->note1_1])
            ->andFilterWhere(['like', 'note1_2', $this->note1_2])
            ->andFilterWhere(['like', 'data_test2', $this->data_test2])
            ->andFilterWhere(['like', 'note2', $this->note2])
            ->andFilterWhere(['like', 'note2_1', $this->note2_1])
            ->andFilterWhere(['like', 'note2_2', $this->note2_2])
            ->andFilterWhere(['like', 'data_test3', $this->data_test3])
            ->andFilterWhere(['like', 'note3', $this->note3])
            ->andFilterWhere(['like', 'note3_1', $this->note3_1])
            ->andFilterWhere(['like', 'note3_2', $this->note3_2])
            ->andFilterWhere(['like', 'data_test4', $this->data_test4])
            ->andFilterWhere(['like', 'note4', $this->note4])
            ->andFilterWhere(['like', 'note4_1', $this->note4_1])
            ->andFilterWhere(['like', 'note4_2', $this->note4_2])
            ->andFilterWhere(['like', 'data_test5', $this->data_test5])
            ->andFilterWhere(['like', 'note5', $this->note5])
            ->andFilterWhere(['like', 'note5_1', $this->note5_1])
            ->andFilterWhere(['like', 'note5_2', $this->note5_2])
            ->andFilterWhere(['like', 'data_test6', $this->data_test6])
            ->andFilterWhere(['like', 'note6', $this->note6])
            ->andFilterWhere(['like', 'note6_1', $this->note6_1])
            ->andFilterWhere(['like', 'note6_2', $this->note6_2])
            ->andFilterWhere(['like', 'data_test7', $this->data_test7])
            ->andFilterWhere(['like', 'note7', $this->note7])
            ->andFilterWhere(['like', 'note7_1', $this->note7_1])
            ->andFilterWhere(['like', 'note7_2', $this->note7_2])
            ->andFilterWhere(['like', 'data_test8', $this->data_test8])
            ->andFilterWhere(['like', 'note8', $this->note8])
            ->andFilterWhere(['like', 'note8_1', $this->note8_1])
            ->andFilterWhere(['like', 'note8_2', $this->note8_2])
            ->andFilterWhere(['like', 'data_test9', $this->data_test9])
            ->andFilterWhere(['like', 'note9', $this->note9])
            ->andFilterWhere(['like', 'note9_1', $this->note9_1])
            ->andFilterWhere(['like', 'note9_2', $this->note9_2])
            ->andFilterWhere(['like', 'data_test10', $this->data_test10])
            ->andFilterWhere(['like', 'note10', $this->note10])
            ->andFilterWhere(['like', 'note10_1', $this->note10_1])
            ->andFilterWhere(['like', 'note10_2', $this->note10_2])
            ->andFilterWhere(['like', 'data_test11', $this->data_test11])
            ->andFilterWhere(['like', 'note11', $this->note11])
            ->andFilterWhere(['like', 'note11_1', $this->note11_1])
            ->andFilterWhere(['like', 'note11_2', $this->note11_2])
            ->andFilterWhere(['like', 'data_test12', $this->data_test12])
            ->andFilterWhere(['like', 'note12', $this->note12])
            ->andFilterWhere(['like', 'note12_1', $this->note12_1])
            ->andFilterWhere(['like', 'note12_2', $this->note12_2])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'checkuser_id', $this->checkuser_id]);

        return $dataProvider;
    }
}
