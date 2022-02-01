<?php

use Phinx\Migration\AbstractMigration;

class BuildingMaster extends AbstractMigration
{
    public function up()
    {
        $this->execute("
            DROP TABLE IF EXISTS `building_master`;
            CREATE TABLE `building_master` (
                `building_id` int(11) NOT NULL AUTO_INCREMENT,
                `hall_type_id` int(11) DEFAULT NULL,
                `title` varchar(60) DEFAULT NULL,
                `description` varchar(255) DEFAULT NULL,
                `alias` varchar(60) DEFAULT NULL,
                `is_active` tinyint(1) DEFAULT NULL,
                `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                `created_by` int(11) DEFAULT NULL,
                PRIMARY KEY (`building_id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        ");
    }
}
