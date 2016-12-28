<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tovar_orders".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $tovar_id
 *
 * @property Tovar $tovar
 * @property Orders $order
 */
class TovarOrders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tovar_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'tovar_id'], 'required'],
            [['order_id', 'tovar_id'], 'integer'],
            [['tovar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tovar::className(), 'targetAttribute' => ['tovar_id' => 'id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'tovar_id' => 'Tovar ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTovar()
    {
        return $this->hasOne(Tovar::className(), ['id' => 'tovar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['id' => 'order_id']);
    }
}
