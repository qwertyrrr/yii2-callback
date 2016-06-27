<?php

use yii\db\Migration;

/**
 * Handles the creation for table `callbackform`.
 */
class m160622_063644_create_callback extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('callback', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'phone' => $this->string(50)->notNull(),
            'message' => $this->string()->notNull(),
            'time' => $this->string(20)->notNull(),
            'createdAt' => $this->dateTime()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('callback');
    }
}
