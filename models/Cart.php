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
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function addToCart($auto, $qty = 1)
    {
        $mainImg = $auto->getImage();
        if (isset($_SESSION['cart'][$auto->id]))
        {
            $_SESSION['cart'][$auto->id]['qty'] += $qty;
        }else
        {
            $_SESSION['cart'][$auto->id] = [
                'qty' => $qty,
                'name' => $auto->name,
                'price' => $auto->price,
                'img' => $mainImg->getUrl()
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $auto->price :
                                                                                       $qty * $auto->price;
    }

    public function recalc($id)
    {
        if(!isset($_SESSION['cart'][$id])) return false;
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id]);
    }
}
