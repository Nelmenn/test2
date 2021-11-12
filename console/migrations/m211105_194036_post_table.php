<?php

use yii\db\Migration;

/**
 * Class m211105_194036_post_table
 */
class m211105_194036_post_table extends Migration
{    
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'lead' => $this->string(150),
            'text' => $this->text(),
            'created_at' => $this->integer()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}

