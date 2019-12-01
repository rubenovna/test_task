<?php

use yii\db\Migration;

/**
 * Class m191201_110112_product
 */
class m191201_110112_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('product', [
            'id'=> $this->primaryKey(),
            'product'=>$this->string(),
            'id_shipper'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191201_110112_product cannot be reverted.\n";

        return false;
    }
    */
}
