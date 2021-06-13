<?php

namespace XT\CoverArticleThread;

use XF\AddOn\AbstractSetup;
use XF\AddOn\StepRunnerInstallTrait;
use XF\AddOn\StepRunnerUninstallTrait;
use XF\AddOn\StepRunnerUpgradeTrait;
use XF\Db\Schema\Alter;

class Setup extends AbstractSetup
{
	use StepRunnerInstallTrait;
	use StepRunnerUpgradeTrait;
	use StepRunnerUninstallTrait;

	public function installStep1()
    {
        $this->schemaManager()->alterTable('xf_forum', function (Alter $table)
        {
            $table->addColumn('xt_cover_img_path', 'varchar', 250)->setDefault('');
        });
    }

    public function uninstallStep1(array $stepParams = [])
    {
        $this->schemaManager()->alterTable('xf_forum', function (Alter $table)
        {
            $table->dropColumns('xt_cover_img_path');
        });
    }

    public function uninstallStep2()
    {
        \XF\Util\File::deleteAbstractedDirectory('data://assets/cover_img/');
    }
}