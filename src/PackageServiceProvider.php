<?php

namespace Hexafuchs\Skeleton;

use Hexafuchs\Skeleton\Commands\SkeletonCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider as ServiceProvider;

/**
 * Registration of the package.
 */
class PackageServiceProvider extends ServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('skeleton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_migration_table_name_table')
            ->hasCommand(SkeletonCommand::class);
    }
}
