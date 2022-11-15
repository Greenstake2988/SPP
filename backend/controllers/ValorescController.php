<?php

namespace backend\controllers;

use Yii;
use app\models\Valoresc;
use app\models\ValorescSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Model;

/**
 * ValorescController implements the CRUD actions for Valoresc model.
 */
class ValorescController extends Controller
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
     * Lists all Valoresc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ValorescSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Valoresc model.
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
     * Creates a new Valoresc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($indicadores_idindicadores)
    {
        $model = new Valoresc();

        $count=6;

        //Send at least one model to the form
        $prts = [new Valoresc()];

        //Create an array of the products submitted
        for($i = 1; $i < $count; $i++) {
            $prts[] = new Valoresc();
            $prts[0]->indicadores_idindicadores = $indicadores_idindicadores;
            $prts[$i]->indicadores_idindicadores = $indicadores_idindicadores;

        }

        //Load and validate the multiple models
        if (Model::loadMultiple($prts, Yii::$app->request->post()) && Model::validateMultiple($prts)) {

            foreach ($prts as $valoresc) {
                $valoresc->save(false);
            }
            return $this->redirect(['index']);
        } else {
            return $this->render('create', ['prts' => $prts]);
        }
    }

    /**
     * Updates an existing Valoresc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idvaloresc]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Valoresc model.
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
     * Finds the Valoresc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Valoresc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Valoresc::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
