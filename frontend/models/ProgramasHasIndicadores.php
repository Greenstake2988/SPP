<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "programas_has_indicadores".
 *
 * @property integer $programas_idprogramas
 * @property integer $indicadores_idindicadores
 *
 * @property Indicadores $indicadoresIdindicadores
 * @property Programas $programasIdprogramas
 */
class Programashasindicadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programas_has_indicadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['programas_idprogramas', 'indicadores_idindicadores'], 'required'],
            [['programas_idprogramas', 'indicadores_idindicadores'], 'integer'],
            [['indicadores_idindicadores'], 'exist', 'skipOnError' => true, 'targetClass' => Indicadores::className(), 'targetAttribute' => ['indicadores_idindicadores' => 'idindicadores']],
            [['programas_idprogramas'], 'exist', 'skipOnError' => true, 'targetClass' => Programas::className(), 'targetAttribute' => ['programas_idprogramas' => 'idprogramas']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'programas_idprogramas' => 'Nombre del Programa',
            'indicadores_idindicadores' => 'Indicador',
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndicadoresIdindicadores()
    {
        return $this->hasOne(Indicadores::className(), ['idindicadores' => 'indicadores_idindicadores']);

    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramasIdprogramas()
    {
        return $this->hasOne(Programas::className(), ['idprogramas' => 'programas_idprogramas']);
       
    }
    public function getProgramaList()
    {
        $usuarios = Programas::find()->all();
        $usuariosList = ArrayHelper::map($usuarios, 'idprogramas', 'nombre');
        return $usuariosList; }
        public function getIndicadorList()
    {
        $usuarios = Indicadores::find()->all();
        $usuariosList = ArrayHelper::map($usuarios, 'idindicadores', 'nombre');
        return $usuariosList; }
        //metodos para el view

        public function getProgramasid($id)
        {
         $usuarios =  Programas::findOne($id);
         return $usuarios->nombre; }
         public function getIndicadoresid($id)
         {
          $usuarios =  Indicadores::findOne($id);
          return $usuarios->nombre; }
//Metodos para aparecer texto en el index
          public static function getUserName($id)
          {
          if ($user = Programas::findOne($id))
          return $user->nombre;
          else
          return '';
          }
          public static function getUserNameIn($id)
          {
          if ($user = Indicadores::findOne($id))
          return $user->nivelObjetivo;
          else
          return '';
          }
          public function getProgramaName()
        {
        return $this->Programas->nombre;
        }
        public function getIndicadorName()
        {
        return $this->Indicadores->nombre;
        }

          

      

}

