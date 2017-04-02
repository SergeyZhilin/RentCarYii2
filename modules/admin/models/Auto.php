<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "auto".
 *
 * @property string $id
 * @property string $type_id
 * @property string $name
 * @property string $content
 * @property double $price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property string $Availability
 */
class Auto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auto';
    }

    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'name'], 'required'],
            [['type_id'], 'integer'],
            [['content', 'hit', 'new', 'sale', 'Availability'], 'string'],
            [['price'], 'number'],
            [['name', 'keywords', 'description', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID транспортного средства.',
            'type_id' => 'Тип транспортного средства.',
            'name' => 'Марка транспорта',
            'content' => 'Описание',
            'price' => 'Цена $',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описания',
            'img' => 'Изображение',
            'hit' => 'Хит',
            'new' => 'Новинка',
            'sale' => 'Распродажа',
            'Availability' => 'Наличие',
        ];
    }
}
