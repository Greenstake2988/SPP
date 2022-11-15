<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programas".
 *
 * @property integer $idprogramas
 * @property string $nombre
 *
 * @property ProgramasHasIndicadores[] $programasHasIndicadores
 * @property Indicadores[] $indicadoresIdindicadores
 */
class Programas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprogramas' => 'Idprogramas',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramasHasIndicadores()
    {
        return $this->hasMany(ProgramasHasIndicadores::className(), ['programas_idprogramas' => 'idprogramas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndicadoresIdindicadores()
    {
        return $this->hasMany(Indicadores::className(), ['idindicadores' => 'indicadores_idindicadores'])->viaTable('programas_has_indicadores', ['programas_idprogramas' => 'idprogramas']);
    }
}
