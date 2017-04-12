<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallary".
 *
 * @property integer $id
 * @property string $image
 * @property string $caption
 * @property string $description
 */
class Gallary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption', 'description'], 'required'],
            [['image', 'caption', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'caption' => 'Caption',
            'description' => 'Description',
        ];
    }
}
