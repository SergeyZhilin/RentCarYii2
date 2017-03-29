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
use yii\data\Pagination;
use yii\web\HttpException;

class TypeController extends AppController
{
    public function actionIndex()
    {
        $hits = Auto::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('Rent Car for A-Level');
        return $this->render('index', compact('hits'));
    }

    public function actionView($id)
    {

        $type = Type::findOne($id);
            if (empty($type))
                throw new \yii\web\HttpException(404, 'Такого товара не существует, досвидули!');

        $query = Auto::find()->where(['type_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6, 'forcePageParam' => false,
                                 'pageSizeParam' => false]);
        $autos = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('Rent Car | ' . $type->name, $type->keywords, $type->description);
        return $this->render('view', compact('autos', 'pages', 'type'));
    }

    public function actionSearch()
    {

        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('Rent Car | ' . $q);
            if (!$q)
                return $this->render('search');
        $query = Auto::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6, 'forcePageParam' => false,
            'pageSizeParam' => false]);
        $autos = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('autos', 'pages', 'q'));

    }
}