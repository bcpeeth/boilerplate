<?php

namespace Concrete\Core\Updater\Migrations\Migrations;

use Concrete\Core\Updater\Migrations\AbstractMigration;
use Concrete\Core\Updater\Migrations\DirectSchemaUpgraderInterface;

class Version20160107000000 extends AbstractMigration implements DirectSchemaUpgraderInterface
{
    /**
     * {@inheritdoc}
     *
     * @see \Concrete\Core\Updater\Migrations\DirectSchemaUpgraderInterface::upgradeDatabase()
     */
    public function upgradeDatabase()
    {
        \Concrete\Core\Database\Schema\Schema::refreshCoreXMLSchema([
            'Users',
        ]);
    }
}
