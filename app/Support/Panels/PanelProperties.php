<?php

namespace App\Support\Panels;

class PanelProperties
{
    use PanelPropertiesTrait;

    protected $config;
    protected $authProvider;
    protected $app;

    /**
     * PanelProperties constructor.
     *
     * @param string|array $config
     */
    public function __construct($config = 'request')
    {
        $this->app = $config === 'request' ? app() : $config['app'];
        $this->authProvider = $config === 'request' ? request()->authProvider() : $config['authProvider'];
    }
}