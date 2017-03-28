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
        $id = Yii::$app->request->get('id');
//        $autos = Auto::find()->where(['type_id' => $id])->all();
        $query = Auto::find()->where(['type_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6, 'forcePageParam' => false,
                                 'pageSizeParam' => false]);
        $autos = $query->offset($pages->offset)->limit($pages->limit)->all();
        $type = Type::findOne($id);
        $this->setMeta('Rent Car for A-Level | ' . $type->name, $type->keywords, $type->description);
        return $this->render('view', compact('autos', 'pages', 'type'));
    }

}