<?php

use yii\db\Migration;

/**
 * Class m211108_070604_article_table
 */
class m211108_070604_article_table extends Migration
{
    public function up()
    {
    'id' => $this->primaryKey(),
    'title'
    }

    public function down()
    {
        echo "m211108_070604_article_table cannot be reverted.\n";

        return false;
    }
    
}
