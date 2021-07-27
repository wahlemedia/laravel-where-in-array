<?php

namespace Wahlemedia\WhereInArray;

use Illuminate\Support\Arr;
use Spatie\LaravelPackageTools\Package;
use Illuminate\Database\Eloquent\Builder;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile();
    }

    public function bootingPackage()
    {
        Builder::macro('whereInArray', function ($column, $values) {
            return is_array($values)
                ? $this->where(function (Builder $query) use ($column, $values) {
                    foreach (Arr::wrap($values) as $value) {
                        $query->orWhere($column, 'like', '%' . $value . '%');
                    }
                }) : $this;
        });

        Builder::macro('whereNotInArray', function ($column, $values) {
            return is_array($values)
                ? $this->where(function (Builder $query) use ($column, $values) {
                    foreach (Arr::wrap($values) as $value) {
                        $query->orWhere($column, 'not like', '%' . $value . '%');
                    }
                }) : $this;
        });
    }
}
