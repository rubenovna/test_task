<?php

use yii\db\Migration;

/**
 * Class m191201_105739_shipper
 */
class m191201_105739_shipper extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('shipper', [
            'id'=> $this->primaryKey(),
        'shipper'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('shipper');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191201_105739_shipper cannot be reverted.\n";

        return false;
    }
    */
}
