<?php

namespace app\controllers;

use Yii;
use app\models\Medico;
use app\models\MedicoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\MedicoHasEspecialidades;
use app\models\Clinica;
/**
 * MedicoController implements the CRUD actions for Medico model.
 */
class MedicoController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Medico models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MedicoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Medico model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {   

        return $this->render('view', [
            'especialidades' => $this->especialidades($id),
            'clinicas' => $this->clinicas($id),
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Medico model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Medico();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Medico_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Medico model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Medico_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Medico model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Medico model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Medico the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Medico::findOne($id)) !== null) {

            return $model;
        }

        $rows = (new \yii\db\Query())
        ->select(['id', 'email'])
        ->from('Clinica','Medico_has_Especialidades')
        ->where(['Medico_id' => $id])
        ->all();
        throw new NotFoundHttpException('The requested page does not exist.');
    }
    protected function clinicas($id){
        $clinicas = (new \yii\db\Query())
        ->select(['Clinica_id'])
        ->from('Medico_has_Especialidades')
        ->where(['Medico_id' =>$id])
        ->all();
        $rows = (new \yii\db\Query())
        ->select(['*'])
        ->from('Clinica')
        ->where(['Clinica_id' =>$clinicas])
        ->all();
        return $rows;
    }
    protected function especialidades($id){
        $especialidades = (new \yii\db\Query())
        ->select(['Especialidades_id'])
        ->from('Medico_has_Especialidades')
        ->where(['Medico_id' =>$id])
        ->all();
        $rows = (new \yii\db\Query())
        ->select(['*'])
        ->from('Especialidades')
        ->where(['Especialidades_id' =>$especialidades])
        ->all();
        return $rows;
    }

}   
