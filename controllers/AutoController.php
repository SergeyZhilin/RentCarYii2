<?php

namespace app\controllers;
use app\models\Type;
use app\models\Auto;
use Yii;

class AutoController extends AppController
{
    public function actionView($id)
    {

        $auto = Auto::findOne($id);
        if (empty($auto))
            throw new \yii\web\HttpException(404, 'Такого товара не существует, досвидули!');

        $hits = Auto::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('Rent Car for A-Level | ' . $auto->name, $auto->keywords, $auto->description);
        return $this->render('view', compact('auto', 'hits'));
    }

}