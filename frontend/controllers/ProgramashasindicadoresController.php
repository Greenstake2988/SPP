<?php

namespace frontend\controllers;

use Yii;
use app\models\Programashasindicadores;
use app\models\ProgramashasindicadoresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProgramashasindicadoresController implements the CRUD actions for Programashasindicadores model.
 */
class ProgramashasindicadoresController extends Controller
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
        ];
    }

    /**
     * Lists all Programashasindicadores models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProgramashasindicadoresSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Programashasindicadores model.
     * @param integer $programas_idprogramas
     * @param integer $indicadores_idindicadores
     * @return mixed
     */
    public function actionView($programas_idprogramas, $indicadores_idindicadores)
    {
        return $this->render('view', [
            'model' => $this->findModel($programas_idprogramas, $indicadores_idindicadores),
        ]);
    }

    /**
     * Creates a new Programashasindicadores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Programashasindicadores();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'programas_idprogramas' => $model->programas_idprogramas, 'indicadores_idindicadores' => $model->indicadores_idindicadores]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Programashasindicadores model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $programas_idprogramas
     * @param integer $indicadores_idindicadores
     * @return mixed
     */
    public function actionUpdate($programas_idprogramas, $indicadores_idindicadores)
    {
        $model = $this->findModel($programas_idprogramas, $indicadores_idindicadores);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'programas_idprogramas' => $model->programas_idprogramas, 'indicadores_idindicadores' => $model->indicadores_idindicadores]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Programashasindicadores model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $programas_idprogramas
     * @param integer $indicadores_idindicadores
     * @return mixed
     */
    public function actionDelete($programas_idprogramas, $indicadores_idindicadores)
    {
        $this->findModel($programas_idprogramas, $indicadores_idindicadores)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Programashasindicadores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $programas_idprogramas
     * @param integer $indicadores_idindicadores
     * @return Programashasindicadores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($programas_idprogramas, $indicadores_idindicadores)
    {
        if (($model = Programashasindicadores::findOne(['programas_idprogramas' => $programas_idprogramas, 'indicadores_idindicadores' => $indicadores_idindicadores])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
