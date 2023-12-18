<?php

use yii\db\Migration;

/**
 * Class m231218_083523_add_image_column_to_furniture
 */
class m231218_083523_add_image_column_to_furniture extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%furniture}}', 'image', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231218_083523_add_image_column_to_furniture cannot be reverted.\n";
		$this->dropColumn('{{%furniture}}', 'image');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231218_083523_add_image_column_to_furniture cannot be reverted.\n";

        return false;
    }
    */
}
