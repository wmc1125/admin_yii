<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class TestController extends Controller
{

    public function actionIndex()
    {


        return $this->render('index');
    }

}
