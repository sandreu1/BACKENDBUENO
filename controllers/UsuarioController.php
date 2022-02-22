<?php

namespace app\controllers;

use Yii;
use app\models\Usuario;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\UsuarioSearch;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */
class UsuarioController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','delete','update'],
                'rules' => [
                    ['allow' => true,
                     'actions' => ['create', 'delete'],
                     'matchCallback' => function ($rule, $action) {
                                           return Yii::$app->user->identity->hasRole('A');
                                        }
 
                    ],
                    ['allow' => true,
                     'actions' => ['update'],
                     'matchCallback' => function ($rule, $action) {
                                           return !Yii::$app->user->isGuest && 
                                              Yii::$app->user->identity->tipo=="A"; //Un usuario identificado y de alta
                                        }
 
                    ],
 
                ],
            ],
        ];
    }

    /**
     * Lists all Usuario models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UsuarioSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuario model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Usuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Usuario();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                //Generar token
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < 32; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }

                //Pasar contraseña a md5
                $model->contraseña = md5($model->contraseña);
                //Asignar el token generado
                $model->token = $randomString;
                if ($model->save()) { 
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Usuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->contraseña = md5($model->contraseña);
            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);

        
    }

    //Copair la contraseña en md5 al token y cambiar 

    /**
     * Deletes an existing Usuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Usuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usuario::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}