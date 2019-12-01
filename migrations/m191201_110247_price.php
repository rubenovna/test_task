<?php

use yii\db\Migration;

/**
 * Class m191201_110247_price
 */
class m191201_110247_price extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('price', [
            'id'=> $this->primaryKey(),
            'price'=>$this->string(),
            'id_product'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('price');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191201_110247_price cannot be reverted.\n";

        return false;
    }
    */
}
