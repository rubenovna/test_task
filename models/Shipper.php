<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shipper".
 *
 * @property int $id
 * @property string|null $shipper
 */
class Shipper extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shipper';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shipper'], 'string','max' => 255],
           // ['shipper', 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'shipper' => 'Shipper',
        ];
    }
}
