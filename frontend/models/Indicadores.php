<?php

namespace app\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "indicadores".
 *
 * @property integer $idindicadores
 * @property string $nombre
 * @property string $objetivo
 * @property string $nivelObjetivo
 * @property string $unidadMedida
 * @property integer $meta
 * @property string $variableB
 * @property string $medioVerificacionB
 * @property string $variableC
 * @property string $medioVerificacionC
 * @property integer $periodicidad_idperiodicidad
 *
 * @property Periodicidad $periodicidadIdperiodicidad
 * @property ProgramasHasIndicadores[] $programasHasIndicadores
 * @property Programas[] $programasIdprogramas
 * @property Valoresb[] $valoresbs
 * @property Valoresc[] $valorescs
 */
class Indicadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'indicadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta', 'periodicidad_idperiodicidad'], 'integer'],
            [['periodicidad_idperiodicidad'], 'required'],
            [['nombre', 'objetivo'], 'string', 'max' => 200],
            [['nivelObjetivo', 'unidadMedida'], 'string', 'max' => 45],
            [['variableB', 'variableC'], 'string', 'max' => 150],
            [['medioVerificacionB', 'medioVerificacionC'], 'string', 'max' => 100],
            [['periodicidad_idperiodicidad'], 'exist', 'skipOnError' => true, 'targetClass' => Periodicidad::className(), 'targetAttribute' => ['periodicidad_idperiodicidad' => 'idperiodicidad']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idindicadores' => 'Idindicadores',
            'nombre' => 'Nombre',
            'objetivo' => 'Objetivo',
            'nivelObjetivo' => 'Nivel Objetivo',
            'unidadMedida' => 'Unidad Medida',
            'meta' => 'Meta',
            'variableB' => 'Variable B',
            'medioVerificacionB' => 'Medio Verificacion B',
            'variableC' => 'Variable C',
            'medioVerificacionC' => 'Medio Verificacion C',
            'periodicidad_idperiodicidad' => 'Periodicidad Idperiodicidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodicidadIdperiodicidad()
    {
        return $this->hasOne(Periodicidad::className(), ['idperiodicidad' => 'periodicidad_idperiodicidad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramasHasIndicadores()
    {
        return $this->hasMany(ProgramasHasIndicadores::className(), ['indicadores_idindicadores' => 'idindicadores']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramasIdprogramas()
    {
        return $this->hasMany(Programas::className(), ['idprogramas' => 'programas_idprogramas'])->viaTable('programas_has_indicadores', ['indicadores_idindicadores' => 'idindicadores']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValoresbs()
    {
        return $this->hasMany(Valoresb::className(), ['indicadores_idindicadores' => 'idindicadores']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValorescs()
    {
        return $this->hasMany(Valoresc::className(), ['indicadores_idindicadores' => 'idindicadores']);
    }

    public function getPeriodicidadList()
    {
        $usuarios = Periodicidad::find()->all();
        $usuariosList = ArrayHelper::map($usuarios, 'idperiodicidad', 'fechaInicio');
        return $usuariosList; 
    }
}
