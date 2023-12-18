<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%test}}`.
 */
class m231218_064111_create_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%works}}', [
            'id_works' => $this->primaryKey(),
            'id_student' => $this->integer(),
            'id_sotrudnik' => $this->string(256),
            'id_specialty' => $this->string(256),
            'id_podpis' => $this->string(256),
            'datez' => $this->string(256),
            'name' => $this->string(256),
            'status' => $this->string(256),
            'typew' => $this->string(256),
            'ozenka' => $this->string(256),
            'mycheckwork' => $this->string(256),
            'docmycheckwork' => $this->string(256),
            'intercheckwork' => $this->string(256),
            'docintercheckwork' => $this->string(256),
            'publicwork' => $this->string(256),
            'filework' => $this->string(256),
            'statuswork' => $this->string(256),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%works}}');
    }
}
