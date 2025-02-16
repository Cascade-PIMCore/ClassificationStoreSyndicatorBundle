<?php

namespace Cascade\ClassificationStoreSyndicatorBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Installer\InstallerInterface;
use Pimcore\Extension\Bundle\PimcoreBundleAdminClassicInterface;
use Pimcore\Extension\Bundle\Traits\BundleAdminClassicTrait;

class ClassificationStoreSyndicatorBundle extends AbstractPimcoreBundle implements PimcoreBundleAdminClassicInterface
{
    use BundleAdminClassicTrait;

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getJsPaths(): array
    {
        return [
            '/bundles/classificationstoresyndicator/js/pimcore/startup.js'
        ];
    }
    public function getInstaller(): ?InstallerInterface
    {
        return $this->container->get(ClassificationStoreSyndicatorBundleInstaller::class);
    }
}
