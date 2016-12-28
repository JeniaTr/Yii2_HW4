<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property string $date
 * @property double $sum
 * @property integer $buyer_id
 *
 * @property Buyer $buyer
 * @property TovarOrders[] $tovarOrders
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['sum'], 'number'],
            [['buyer_id'], 'required'],
            [['buyer_id'], 'integer'],
            [['buyer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Buyer::className(), 'targetAttribute' => ['buyer_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'sum' => 'Sum',
            'buyer_id' => 'Buyer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuyer()
    {
        return $this->hasOne(Buyer::className(), ['id' => 'buyer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTovarOrders()
    {
        return $this->hasMany(TovarOrders::className(), ['order_id' => 'id']);
    }
}
