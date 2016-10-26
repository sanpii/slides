<?php
declare(strict_types = 1);

namespace My;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\{ Capable, PluginInterface };
use Composer\Plugin\Capability\CommandProvider;

class Plugin implements PluginInterface, Capable, CommandProvider
{
    public function activate(Composer $composer, IOInterface $io)
    {
    }

    public function getCapabilities(): array
    {
        return [
            CommandProvider::class => self::class,
        ];
    }

    public function getCommands(): array
    {
        return [
            new Command
        ];
    }
}
