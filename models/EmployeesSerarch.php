<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employees;

/**
 * EmployeesSerarch represents the model behind the search form about `app\models\Employees`.
 */
class EmployeesSerarch extends Employees
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'bd', 'blood', 'cid', 'ex', 'sex', 'addr', 'tel', 'social', 'satatus'], 'safe'],
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
        $query = Employees::find();

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
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'bd', $this->bd])
            ->andFilterWhere(['like', 'blood', $this->blood])
            ->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'ex', $this->ex])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'social', $this->social])
            ->andFilterWhere(['like', 'satatus', $this->satatus]);

        return $dataProvider;
    }
}
