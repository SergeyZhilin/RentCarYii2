<?php
/**
 * Created by PhpStorm.
 * User: SimplyWorld
 * Date: 24.03.2017
 * Time: 14:58
 */

namespace app\models;
use Codeception\Util\Autoload;
use yii\db\ActiveRecord;

class Type extends ActiveRecord
{

    public static function tableName()
    {
        return 'type';
    }

    public function getAutos()
    {
        return $this->hasMany(Auto::className(), ['type_id' => 'id']);
    }
}