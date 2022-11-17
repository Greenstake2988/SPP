<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Valoresb;

/**
 * ValoresbSearch represents the model behind the search form about `app\models\Valoresb`.
 */
class ValoresbSearch extends Valoresb
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idvaloresb', 'Total', 'hombres', 'mujeres', 'pertenecenEtnia', 'HabitanEnElEstado', 'DiscapacidadMotriz', 'DiscapacidadMental', 'DiscapacidadSensorial', 'DiscapacidadPsicosocial', 'DiscapacidadComunicacion', 'indicadores_idindicadores'], 'integer'],
            [['ingenieria', 'creado', 'guardado'], 'safe'],
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
        $query = Valoresb::find();

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
            'idvaloresb' => $this->idvaloresb,
            'Total' => $this->Total,
            'hombres' => $this->hombres,
            'mujeres' => $this->mujeres,
            'pertenecenEtnia' => $this->pertenecenEtnia,
            'HabitanEnElEstado' => $this->HabitanEnElEstado,
            'DiscapacidadMotriz' => $this->DiscapacidadMotriz,
            'DiscapacidadMental' => $this->DiscapacidadMental,
            'DiscapacidadSensorial' => $this->DiscapacidadSensorial,
            'DiscapacidadPsicosocial' => $this->DiscapacidadPsicosocial,
            'DiscapacidadComunicacion' => $this->DiscapacidadComunicacion,
            'creado' => $this->creado,
            'guardado' => $this->guardado,
            'indicadores_idindicadores' => $this->indicadores_idindicadores,
        ]);

        $query->andFilterWhere(['like', 'ingenieria', $this->ingenieria]);

        return $dataProvider;
    }
}
