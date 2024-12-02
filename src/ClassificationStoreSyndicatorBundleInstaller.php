<?php

namespace Cascade\ClassificationStoreSyndicatorBundle;

use Pimcore\Extension\Bundle\Installer\SettingsStoreAwareInstaller;

class ClassificationStoreSyndicatorBundleInstaller extends SettingsStoreAwareInstaller
{
    public function install(): void
    {
        $this->markInstalled();
    }

    public function uninstall(): void
    {
        $this->markUninstalled();
    }
}
