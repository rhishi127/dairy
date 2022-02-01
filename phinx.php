<?php

require_once 'bootstrap.php';

use Custom\ApplicationMain;
use Custom\Connections\DBConnectionAdapter;

ApplicationMain::init($appConfig, true);

$pdo = DBConnectionAdapter::getInstance()->getConnection();
$migrationPath = __DIR__ . '/data/migrations';

return [
    'paths' => [
        'migrations' => $migrationPath,
         'seeds' => $migrationPath
    ],
    'foreign_keys' => false,
    'default_migration_prefix' => 'db_change_',
    'mark_generated_migration' => true,
    'migration_base_class' => \Phinx\Migration\AbstractMigration::class,
    'environments' => [
        'default_environment' => 'local',
        'local' => [
            // Database name
            'name' => $pdo->query('select database()')->fetchColumn(),
            'connection' => $pdo,
        ]
    ]
];