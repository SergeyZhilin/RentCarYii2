<?php
/**
 * Created by PhpStorm.
 * User: SimplyWorld
 * Date: 29.03.2017
 * Time: 13:20
 */

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{

    public function addToCart($auto, $qty = 1)
    {
        if (isset($_SESSION['cart'][$auto->id]))
        {
            $_SESSION['cart'][$auto->id]['qty'] += $qty;
        }else
        {
            $_SESSION['cart'][$auto->id] = [
                'qty' => $qty,
                'name' => $auto->name,
                'price' => $auto->price,
                'img' => $auto->img
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $auto->price :
                                                                                       $qty * $auto->price;
    }
}
