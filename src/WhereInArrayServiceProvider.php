<?php

namespace Wahlemedia\WhereInArray;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wahlemedia\WhereInArray\Commands\WhereInArrayCommand;

class WhereInArrayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-where-in-array')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-where-in-array_table')
            ->hasCommand(WhereInArrayCommand::class);
    }
}
