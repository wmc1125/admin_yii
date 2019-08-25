<?php

namespace app\modules\test\controllers;
use app\models\Test;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\base\ErrorException;
/**
 * Default controller for the `test` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionDate()
    {
        return $this->render('date');
    }
    public function actionTest()
    {
        return $this->render('test');
    }
    public function actionCurd(){
        $test = new Test();
//        $test->id = 1;
        $test->name = 'name1';
        $test->save();
        print_r($test->getErrors());
    }
    public function actionEr()
    {
//        try {
//            10/0;
//        } catch (ErrorException $e) {
//            Yii::warning("Division by zero.");
//        }
        throw new NotFoundHttpException('error');
//        return $this->render('er');
    }
    public function actionPoge()
    {
//        http://yiitest:7888/index.php?r=test/default/poge&id=1
        $request = \YII::$app->request;
        echo $request->get('id',0);
        $request->post();
        $request->post('id',0);
        if($request->isGet){

        }


    }


//    使用过滤器
    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\HttpCache',
                'only' => ['index', 'view'],//应用到index  view方法
                'lastModified' => function ($action, $params) {
                    return 11;
                },
            ],
        ];
    }
}
