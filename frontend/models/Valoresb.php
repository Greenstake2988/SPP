<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "valoresb".
 *
 * @property integer $idvaloresb
 * @property integer $Total
 * @property integer $hombres
 * @property integer $mujeres
 * @property integer $pertenecenEtnia
 * @property integer $HabitanEnElEstado
 * @property string $ingenieria
 * @property integer $DiscapacidadMotriz
 * @property integer $DiscapacidadMental
 * @property integer $DiscapacidadSensorial
 * @property integer $DiscapacidadPsicosocial
 * @property integer $DiscapacidadComunicacion
 * @property string $creado
 * @property string $guardado
 * @property integer $indicadores_idindicadores
 *
 * @property Indicadores $indicadoresIdindicadores
 */
class Valoresb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'valoresb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Total', 'hombres', 'mujeres', 'pertenecenEtnia', 'HabitanEnElEstado', 'DiscapacidadMotriz', 'DiscapacidadMental', 'DiscapacidadSensorial', 'DiscapacidadPsicosocial', 'DiscapacidadComunicacion', 'indicadores_idindicadores'], 'integer'],
            [['hombres', 'mujeres', 'pertenecenEtnia', 'HabitanEnElEstado', 'ingenieria', 'DiscapacidadMotriz', 'DiscapacidadMental', 'DiscapacidadSensorial', 'DiscapacidadPsicosocial', 'DiscapacidadComunicacion', 'creado', 'guardado', 'indicadores_idindicadores'], 'required'],
            [['creado', 'guardado'], 'safe'],
            [['ingenieria'], 'string', 'max' => 45],
            [['indicadores_idindicadores'], 'exist', 'skipOnError' => true, 'targetClass' => Indicadores::className(), 'targetAttribute' => ['indicadores_idindicadores' => 'idindicadores']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idvaloresb' => 'Idvaloresb',
            'Total' => 'Total',
            'hombres' => 'Hombres',
            'mujeres' => 'Mujeres',
            'pertenecenEtnia' => 'Pertenecen Etnia',
            'HabitanEnElEstado' => 'Habitan En El Estado',
            'ingenieria' => 'Ingenieria',
            'DiscapacidadMotriz' => 'Discapacidad Motriz',
            'DiscapacidadMental' => 'Discapacidad Mental',
            'DiscapacidadSensorial' => 'Discapacidad Sensorial',
            'DiscapacidadPsicosocial' => 'Discapacidad Psicosocial',
            'DiscapacidadComunicacion' => 'Discapacidad Comunicacion',
            'creado' => 'Creado',
            'guardado' => 'Guardado',
            'indicadores_idindicadores' => 'Indicadores Idindicadores',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndicadoresIdindicadores()
    {
        return $this->hasOne(Indicadores::className(), ['idindicadores' => 'indicadores_idindicadores']);
    }

    public function getIndicadoresid($id)
    {
     $usuarios =  Indicadores::findOne($id);
     return $usuarios->nombre; }
}
