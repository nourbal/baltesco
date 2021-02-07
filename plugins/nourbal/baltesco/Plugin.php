<?php namespace Nourbal\Baltesco;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Nourbal\Baltesco\Components\Link' => 'link',
    	];
    }

    public function registerSettings()
    {
    }
}
