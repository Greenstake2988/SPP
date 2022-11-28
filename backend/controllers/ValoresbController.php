<?php

namespace backend\controllers;

use app\models\Indicadores;
use Yii;
use app\models\Valoresb;
use app\models\ValoresbSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Model;
use app\models\IndicadoresSearch;
use yii\web\ForbiddenHttpException;


/**
 * ValoresbController implements the CRUD actions for Valoresb model.
 */
class ValoresbController extends Controller
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
            'only'=>['index','view','create','update','delete'],
            'rules'=>[
                [
                    'actions'=>['index','view','create','update','delete'],
                    'allow'=>true,
                    'roles'=>['@'],
                ]
            ]
            ]
        ];
    }

    /**
     * Lists all Valoresb models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ValoresbSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Valoresb model.
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
     * Creates a new Valoresb model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($indicadores_idindicadores)
    {
        $count=6;

        //Send at least one model to the form
        //$this->loadProject($indicadores_idindicadores);
        $prts = [new valoresb()];
   
       
        //Create an array of the products submitted
        for($i = 1; $i < $count; $i++) {
            $prts[] = new valoresb();
            $prts[0]->indicadores_idindicadores = $indicadores_idindicadores;
            $prts[$i]->indicadores_idindicadores = $indicadores_idindicadores;

        }

        //Load and validate the multiple models
        if (Model::loadMultiple($prts, Yii::$app->request->post()) && Model::validateMultiple($prts)) {     
               
            foreach ($prts as $valoresb) {
                $valoresb->save(false);
            }
            return $this->redirect(['valoresc/create','indicadores_idindicadores' => $indicadores_idindicadores]);
        } else {
            return $this->render('create', ['prts' => $prts]);
        }
    }

   // public function loadProject($indicadores_idindicadores)
//{
  //  if (($prts = Indicadores::findOne($indicadores_idindicadores)) !== null) {
    //return $prts;
    //} else {
    //throw new ForbiddenHttpException('You must select a valid
    //project.');
 //}
//}


    /**
     * Updates an existing Valoresb model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
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
     * Deletes an existing Valoresb model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Valoresb model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Valoresb the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Valoresb::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
