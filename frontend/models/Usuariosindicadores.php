<?php

namespace app\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "usuariosindicadores".
 *
 * @property integer $idusuario
 * @property integer $idroles
 * @property integer $idindicadores
 *
 * @property Roles $idroles0
 * @property User $idusuario0
 * @property Indicadores $idindicadores0
 */
class Usuariosindicadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuariosindicadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idusuario', 'idroles', 'idindicadores'], 'required'],
            [['idusuario', 'idroles', 'idindicadores'], 'integer'],
            [['idroles'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['idroles' => 'idrole']],
            [['idusuario'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idusuario' => 'id']],
            [['idindicadores'], 'exist', 'skipOnError' => true, 'targetClass' => Indicadores::className(), 'targetAttribute' => ['idindicadores' => 'idindicadores']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => 'Usuario',
            'idroles' => 'Departamento',
            'idindicadores' => 'Indicador',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdroles0()
    {
        return $this->hasOne(Roles::className(), ['idrole' => 'idroles']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdusuario0()
    {
        return $this->hasOne(User::className(), ['id' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdindicadores0()
    {
        return $this->hasOne(Indicadores::className(), ['idindicadores' => 'idindicadores']);
    }
    public function getUsuariosList()
    {
        $usuarios = user::find()->all();
        $usuariosList = ArrayHelper::map($usuarios, 'id', 'username');
        return $usuariosList; }

        public function getRoleList()
    {
        $usuarios = roles::find()->all();
        $usuariosList = ArrayHelper::map($usuarios, 'idrole', 'role');
        return $usuariosList; }
    public function getIndicadorList()
    {
            $usuarios = Indicadores::find()->all();
            $usuariosList = ArrayHelper::map($usuarios, 'idindicadores', 'nombre');
            return $usuariosList; }
    public function getUsuarioIndicador($id)
            {
                    $usuarios =  User::findOne($id);
                    return $usuarios->username; }
    public function getRoles($id)
    {
     $usuarios =  Roles::findOne($id);
     return $usuarios->role; }
     public function getUsuarioIndicadores($id)
     {
      $usuarios =  Indicadores::findOne($id);
      return $usuarios->nombre; }
      //Metodos para cambiar los id's por nombres.

      public static function getUserName($id)
      {
      if ($user = User::findOne($id))
      return $user->username;
      else
      return '';
      }
      public static function getUserNameRole($id)
      {
      if ($user = Roles::findOne($id))
      return $user->role;
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

}
