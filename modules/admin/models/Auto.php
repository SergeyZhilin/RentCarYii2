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
    public $image;
    public $gallery;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

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
            [['image'], 'file', 'extensions' => 'png, jpg'],
//            [['image'], 'file', 'extensions' => 'png', 'jpg'],
//            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4]
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
            'image' => 'Изображение',
            'hit' => 'Хит',
            'new' => 'Новинка',
            'sale' => 'Распродажа',
            'Availability' => 'Наличие',
        ];
    }

    public function upload()
    {
        if ($this->validate())
        {
            $path = 'upload/store' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            return true;
        }else return false;
    }
}
