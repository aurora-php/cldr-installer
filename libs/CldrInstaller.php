<?php

/*
 * This file is part of the 'octris/cldr-installer' package.
 *
 * (c) Harald Lapp <harald@octris.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octris\Cldr;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;

/**
 * CLDR Installer.
 *
 * @copyright   copyright (c) 2014 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class CldrInstaller extends \Composer\Installer\LibraryInstaller
{
    /**
     * Constructor.
     */
    public function __construct(IOInterface $io, Composer $composer)
    {
        parent::__construct($io, $composer, 'octris-cldr');
    }

    public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
    {
    }
}
