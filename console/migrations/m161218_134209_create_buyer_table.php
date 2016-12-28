<?php

use yii\db\Migration;

/**
 * Handles the creation of table `buyer`.
 */
class m161218_134209_create_buyer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('buyer', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(),
            'adress' => $this->text(),
            'telefon' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('buyer');
    }
}
