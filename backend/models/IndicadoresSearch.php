<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Indicadores;
use app\models\Valoresb;
/**
 * IndicadoresSearch represents the model behind the search form about `app\models\Indicadores`.
 */
class IndicadoresSearch extends Indicadores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idindicadores', 'meta','PeriodoEvaluacion', 'periodicidad_idperiodicidad'], 'integer'],
            [['nombre', 'objetivo','Programa', 'nivelObjetivo', 'unidadMedida', 'variableB', 'medioVerificacionB', 'variableC', 'medioVerificacionC',  'estatus'], 'safe'],
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
    public function search($params,$idprogramassearch/*, $valoresb_id = null, $valoresc_id = null )*/
    ){

        /*if ($valoresb_id or $valoresc_id)
        $query = Indicadores::find()->where(['valoresb_id' => $valoresb_id, 'valoresc_id' => $valoresc_id]);
        else*/
        
        $query = Indicadores::find()
        ->leftJoin('usuariosindicadores', 'usuariosindicadores.idindicadores = indicadores.idindicadores')
        ->leftJoin('programas_has_indicadores','programas_has_indicadores.indicadores_idindicadores=indicadores.idindicadores')
        ->where(['usuariosindicadores.idusuario'=>yii::$app->user->identity->id,'programas_has_indicadores.programas_idprogramas'=>$idprogramassearch,'estatus'=>1]);

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
            'idindicadores' => $this->idindicadores,
            'meta' => $this->meta,
            'periodicidad_idperiodicidad' => $this->periodicidad_idperiodicidad,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'Programa', $this->Programa])
            ->andFilterWhere(['like', 'PeriodoEvaluacion', $this->PeriodoEvaluacion])
            ->andFilterWhere(['like', 'objetivo', $this->objetivo])
            ->andFilterWhere(['like', 'nivelObjetivo', $this->nivelObjetivo])
            ->andFilterWhere(['like', 'unidadMedida', $this->unidadMedida])
            ->andFilterWhere(['like', 'variableB', $this->variableB])
            ->andFilterWhere(['like', 'medioVerificacionB', $this->medioVerificacionB])
            ->andFilterWhere(['like', 'variableC', $this->variableC])
            ->andFilterWhere(['like', 'medioVerificacionC', $this->medioVerificacionC])
            ->andFilterWhere(['like', 'estatus', $this->estatus]);

            

        return $dataProvider;
    }
}
