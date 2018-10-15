<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m181015_190216_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
	        'login' => $this->string(50)->notNull()->unique(),
	        'password' => $this->string(100)->notNull(),
	        'role' => $this->integer()->defaultValue(1)
        ]);

        $this->createIndex('ix_user_login', 'users', 'login', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
