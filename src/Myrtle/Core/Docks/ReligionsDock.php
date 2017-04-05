<?php

namespace Myrtle\Core\Docks;

use Myrtle\Religions\Models\Religion;
use Myrtle\Religions\Policies\ReligionsPolicy;

class ReligionsDock extends Dock
{
    /**
     * Description for Dock
     *
     * @var string
     */
    public $description = 'Religion manager';

    /**
     * Explicit Gate definitions
     *
     * @var array
     */
    public $gateDefinitions = [
        'religions.admin' => ReligionsPolicy::class . '@admin',
        'religions.access.admin' => ReligionsPolicy::class . '@accessAdmin',
    ];

    /**
     * Policy mappings
     *
     * @var array
     */
    public $policies = [
        Religion::class => ReligionsPolicy::class,
        ReligionsPolicy::class => ReligionsPolicy::class,
    ];

    /**
     * List of config file paths to be loaded
     *
     * @return array
     */
    public function configPaths()
    {
        return [
            'docks.' . self::class => dirname(__DIR__, 2) . '/config/docks/religions.php',
            'abilities' => dirname(__DIR__, 2) . '/config/abilities.php',
        ];
    }

    /**
     * List of migration file paths to be loaded
     *
     * @return array
     */
    public function migrationPaths()
    {
        return [
            dirname(__DIR__, 2) . '/database/migrations',
        ];
    }

    /**
     * List of routes file paths to be loaded
     *
     * @return array
     */
    public function routes()
    {
        return [
            'admin' => dirname(__DIR__, 2) . '/routes/admin.php',
        ];
    }
}
