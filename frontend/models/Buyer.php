<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buyer".
 *
 * @property integer $id
 * @property string $fio
 * @property string $adress
 * @property integer $telefon
 */
class Buyer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'buyer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adress'], 'string'],
            [['telefon'], 'integer'],
            [['fio'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'adress' => 'Adress',
            'telefon' => 'Telefon',
        ];
    }
}
