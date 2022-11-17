<?php

namespace frontend\controllers;

use app\models\Estatus;
use Yii;
use app\models\Indicadores;
use app\models\IndicadoresSearch;
use app\models\Valoresb;
use app\models\Valoresc;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ValoresbSearch;
use app\models\ValorescSearch;
use yii\base\Model;


/**
 * IndicadoresController implements the CRUD actions for Indicadores model.
 */
class EstatusController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access'=>[
            'class'=>\yii\filters\AccessControl::className(),
            'only'=>['index','view'],
            'rules'=>[
                [
                    'actions'=>['index','view'],
                    'allow'=>true,
                    'roles'=>['@'],
                ]
            ]
            ]
        ];
    }

    /**
     * Lists all Indicadores models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IndicadoresSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Indicadores model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
   
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    
    }

    /**
     * Creates a new Indicadores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Indicadores();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idindicadores]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idindicadores]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Indicadores model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = Indicadores::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('La página que buscas no existe');
        }
    }
}
