<?php

namespace app\controllers;

use app\models\Groups;
use app\models\Mark;
use app\models\Speciality;
use app\models\Student;
use Codeception\Lib\Generator\Group;
use Yii;
use app\models\AcademicPerformance;
use app\models\Search\AcademicPerformanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AcademicPerformanceController implements the CRUD actions for AcademicPerformance model.
 */
class AcademicPerformanceController extends Controller
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
     * Lists all AcademicPerformance models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AcademicPerformanceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AcademicPerformance model.
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
     * Creates a new AcademicPerformance model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AcademicPerformance();

        if ($model->load(Yii::$app->request->post())) {
            $this->saveModel($model);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AcademicPerformance model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $this->saveModel($model);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    private function saveModel($model)
    {
        if(isset($_POST['AcademicPerformance']['id_student'])) {
            $student = new Student();
            $groupId = $student->getGroupIdById($_POST['AcademicPerformance']['id_student']);
            $group = new Groups();
            $specialityId = $group->getSpecialityIdById($groupId);
            $speciality = new Speciality();
            $facultyId = $speciality->getFacultyIdById($specialityId);
            $model->id_speciality = $specialityId;
            $model->id_faculty = $facultyId;
            $model->id_group = $groupId;
            $model->save();
        }
    }
    /**
     * Deletes an existing AcademicPerformance model.
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
     * Finds the AcademicPerformance model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AcademicPerformance the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AcademicPerformance::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSessionStats ()
    {
        $model = new AcademicPerformance();
        if ($model->load(Yii::$app->request->post())) {
            $stats = $model->getStats();
            return $this->render('sessionStats', [
                'model' => $model,
                'stats' =>$stats
            ]);
        } else {
            return $this->render('sessionStats', [
                'model' => $model,
            ]);
        }
    }
}
