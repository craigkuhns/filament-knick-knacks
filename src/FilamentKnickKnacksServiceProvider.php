<?php

namespace Kraghammer\FilamentKnickKnacks;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentKnickKnacksServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-knick-knacks';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-knick-knacks' => __DIR__ . '/../resources/dist/filament-knick-knacks.js',
    // ];

    protected function getStyles(): array
    {
        return config('filament-knick-knacks.load_assets.styles')
            ? ['plugin-filament-knick-knacks' => __DIR__.'/../resources/dist/filament-knick-knacks.css']
            : [];
    }

    protected function getScripts(): array
    {
        return config('filament-knick-knacks.load_assets.scripts')
            ? ['plugin-filament-knick-knacks' => __DIR__.'/../resources/dist/filament-knick-knacks.js']
            : [];
    }

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile()
            ->hasViews();
    }
}
