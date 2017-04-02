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

class Auto extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'auto';
    }

    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }
}