<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tovar_orders`.
 * Has foreign keys to the tables:
 *
 * - `orders`
 * - `tovar`
 */
class m161218_134858_create_tovar_orders_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tovar_orders', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'tovar_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `order_id`
        $this->createIndex(
            'idx-tovar_orders-order_id',
            'tovar_orders',
            'order_id'
        );

        // add foreign key for table `orders`
        $this->addForeignKey(
            'fk-tovar_orders-order_id',
            'tovar_orders',
            'order_id',
            'orders',
            'id',
            'CASCADE'
        );

        // creates index for column `tovar_id`
        $this->createIndex(
            'idx-tovar_orders-tovar_id',
            'tovar_orders',
            'tovar_id'
        );

        // add foreign key for table `tovar`
        $this->addForeignKey(
            'fk-tovar_orders-tovar_id',
            'tovar_orders',
            'tovar_id',
            'tovar',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `orders`
        $this->dropForeignKey(
            'fk-tovar_orders-order_id',
            'tovar_orders'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            'idx-tovar_orders-order_id',
            'tovar_orders'
        );

        // drops foreign key for table `tovar`
        $this->dropForeignKey(
            'fk-tovar_orders-tovar_id',
            'tovar_orders'
        );

        // drops index for column `tovar_id`
        $this->dropIndex(
            'idx-tovar_orders-tovar_id',
            'tovar_orders'
        );

        $this->dropTable('tovar_orders');
    }
}
