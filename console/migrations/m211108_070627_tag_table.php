<?php

use yii\db\Migration;

/**
 * Class m211108_070627_tag_table
 */
class m211108_070627_tag_table extends Migration
{

    public function up()
    {
             $this->createTable('tag', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()
        ]);
    }

    public function down()
    {
        $this->dropTable('tag');
    }
    
}
