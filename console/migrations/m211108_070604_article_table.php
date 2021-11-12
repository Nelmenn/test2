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
            'title'=>$this->string(),
            'description'=>$this->text(),
            'content'=>$this->text(),
            'date'=>$this->date(),
            'image'=>$this->string(),
            'viewed'=>$this->integer(),
            'user_id'=>$this->integer(),
            'status'=>$this->integer(),
            'category_id'=>$this->integer(),
    }

    public function down()
    {
         $this->dropTable('article');
    }
    
}
