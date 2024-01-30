<?php

declare(strict_types=1);

namespace app\database\migrations;

use Cycle\Migrations\Migration;

class OrmDefault36f8d7fc0421e56323d9c9d8b3601f1a extends Migration
{
    protected const DATABASE = 'default';

    public function up(): void
    {
        $this->table('users')
        ->addColumn('id', 'primary', [
            'nullable' => false,
            'defaultValue' => null,
            'size' => 11,
            'autoIncrement' => true,
            'unsigned' => false,
            'zerofill' => false,
        ])
        ->addColumn('username', 'string', ['nullable' => false, 'defaultValue' => null, 'size' => 255])
        ->setPrimaryKeys(['id'])
        ->create();
        $this->table('messages')
        ->addColumn('id', 'primary', [
            'nullable' => false,
            'defaultValue' => null,
            'size' => 11,
            'autoIncrement' => true,
            'unsigned' => false,
            'zerofill' => false,
        ])
        ->addColumn('message', 'string', ['nullable' => false, 'defaultValue' => null, 'size' => 255])
        ->addColumn('user_id', 'integer', [
            'nullable' => false,
            'defaultValue' => null,
            'size' => 11,
            'autoIncrement' => false,
            'unsigned' => false,
            'zerofill' => false,
        ])
        ->addIndex(['user_id'], ['name' => 'messages_index_user_id_65b8ece5b12ee', 'unique' => false])
        ->addForeignKey(['user_id'], 'users', ['id'], [
            'name' => 'messages_foreign_user_id_65b8ece5b12ff',
            'delete' => 'CASCADE',
            'update' => 'CASCADE',
            'indexCreate' => true,
        ])
        ->setPrimaryKeys(['id'])
        ->create();
    }

    public function down(): void
    {
        $this->table('messages')->drop();
        $this->table('users')->drop();
    }
}
