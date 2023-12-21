<?php

use yii\db\Migration;

/**
 * Class m231221_131524_bufet
 */
class m231221_131524_bufet extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tovar}}', [
            'id_works'=> $this->primaryKey(),
            'id_sotrudnik'=> $this->string(256),
            'id_specialty'=> $this->string(256),
            'id_podpis'=> $this->string(256),
            'datez'=> $this->string(256),
            'food'=> $this->string(256),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tovar}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231221_131524_bufet cannot be reverted.\n";

        return false;
    }
    */
}
