<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m200206_101752_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'author_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('{{%fk-book-author}}', '{{%book}}', 'author_id', '{{%author}}', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
