<?php

namespace App\Providers;

use Flipbox\LumenGenerator\LumenGeneratorServiceProvider;

class ConsoleServiceProvider extends LumenGeneratorServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $commands = [
        'Tinker' => 'command.tinker',
    ];

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $devCommands = [
        'ConsoleMake' => 'command.console.make',
    ];
}
