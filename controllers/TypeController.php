<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 26.03.2017
 * Time: 12:35
 */

namespace app\controllers;
use app\models\Type;
use app\models\Auto;
use Yii;

class TypeController extends AppController
{
    public function actionIndex()
    {
        $hits = Auto::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render('index', compact('hits'));
    }

}