<?php

use yii\db\Migration;

/**
 * Class m231218_070712_insert_data_into_test_table
 */
class m231218_070712_insert_data_into_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert(
            'works',
            [
                'id_student',
                'id_sotrudnik',
                'id_specialty',
                'id_podpis',
                'datez',
                'name',
                'status',
                'typew',
                'ozenka',
                'mycheckwork',
                'docmycheckwork',
                'intercheckwork',
                'docintercheckwork',
                'publicwork',
                'filework',
                'statuswork',
            ],
            [
                [1, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', 5, 80, null, null, null, 5, 'Файл1', 'Статус1'],
                [2, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', 5, 80, null, null, null, 5, 'Файл1', 'Статус1'],
                [3, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', 5, 80, null, null, null, 5, 'Файл1', 'Статус1'],
                [4, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', 5, 80, null, null, null, 5, 'Файл1', 'Статус1'],
                [5, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', 5, 80, null, null, null, 5, 'Файл1', 'Статус1'],
                [6, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', 5, 80, null, null, null, 5, 'Файл1', 'Статус1'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('works', ['id_works' => [1, 2, 3, 4, 5, 6,]]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231218_070712_insert_data_into_test_table cannot be reverted.\n";

        return false;
    }
    */
}
