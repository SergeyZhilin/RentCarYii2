<?php
/**
 * Created by PhpStorm.
 * User: SimplyWorld
 * Date: 31.03.2017
 * Time: 10:07
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;


class AppAdminController extends Controller
{
    public function behaviors()
    {
        return ['access' => [
            'class' => AccessControl::className(),
            'rules' => [
                    [
                'allow' => true,
                'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

}