<?php

namespace app\controllers;

use Yii;
use app\components\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use app\models\activerecords\Notification;
use app\models\searchs\NotificationSearch;

/**
 * NotifController class
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class NotifController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['notif-index'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['view'],
                        'roles' => ['notif-view'],
                    ],
                ],
            ],
        ];
    }

    /**
     * List all notification user
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new NotificationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Display view notif
     *
     * @return string
     */
    public function actionView($id)
    {
        $this->layout = 'main';
        $notif = $this->loadModel($id);
        $notif->updateRead();

        return $this->render('view', [
            'model' => $notif,
        ]);
    }

    /**
     * Load data notification
     *
     * @param string ID
     */
    protected function loadModel($id)
    {
        $model = Notification::find()->where(['id' => $id, 'to' => Yii::$app->user->id])->one();
        if ($model === null) {
            throw new NotFoundHttpException();
        }
        return $model;
    }
}
