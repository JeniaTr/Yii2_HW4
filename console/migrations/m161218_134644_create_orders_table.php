<?php

use yii\db\Migration;

/**
 * Handles the creation of table `orders`.
 */
class m161218_134644_create_orders_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('orders', [
            'id' => $this->primaryKey(),
            'buyer_id' => $this->integer(),
            'date' => $this->date(),
            'sum' => $this->float(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('orders');
    }
}
