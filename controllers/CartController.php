<?php
/**
 * Created by PhpStorm.
 * User: SimplyWorld
 * Date: 29.03.2017
 * Time: 13:17
 */

namespace app\controllers;
use app\models\Auto;
use app\models\Cart;
use Yii;


class CartController extends AppController
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $auto = Auto::findOne($id);
        if (empty($auto)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($auto);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
}