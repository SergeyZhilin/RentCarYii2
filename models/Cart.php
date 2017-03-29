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

    public function addToCart($auto, $qtu = 1)
    {
        echo 'Worked!';

    }
}