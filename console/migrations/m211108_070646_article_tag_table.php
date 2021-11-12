<?php

use yii\db\Migration;

/**
 * Class m211108_070646_article_tag_table
 */
class m211108_070646_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211108_070646_article_tag_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211108_070646_article_tag_table cannot be reverted.\n";

        return false;
    }
    */
}
