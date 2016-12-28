<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tovar`.
 */
class m161218_131323_create_tovar_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tovar', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tovar');
    }
}
