<?php

namespace IbrahimBougaoua\Filawidget;

use IbrahimBougaoua\Filawidget\Commands\FilawidgetCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilawidgetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filawidget')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filawidget_table')
            ->hasCommand(FilawidgetCommand::class);
    }
}
