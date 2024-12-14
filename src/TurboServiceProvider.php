<?php

namespace Rapid\Turbo;

use Illuminate\Support\ServiceProvider;

class TurboServiceProvider extends ServiceProvider
{

    protected array $commands = [
    ];

    public function register()
    {
        $this->registerConfig();
        $this->commands($this->commands);
    }

    public function registerConfig()
    {
        $config = __DIR__ . '/../config/turbo.php';

        $this->publishes([$config => base_path('config/turbo.php')], ['turbo']);

        $this->mergeConfigFrom($config, 'turbo');
    }

}