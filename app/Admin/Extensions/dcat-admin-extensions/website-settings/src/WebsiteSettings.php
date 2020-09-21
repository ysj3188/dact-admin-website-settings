<?php

namespace Dcat\Admin\Extension\WebsiteSettings;

use Dcat\Admin\Extension;

class WebsiteSettings extends Extension
{
    const NAME = 'website-settings';

    protected $serviceProvider = WebsiteSettingsServiceProvider::class;

    protected $composer = __DIR__.'/../composer.json';

//    protected $assets = __DIR__.'/../resources/assets';

    protected $views = __DIR__.'/../resources/views';

//    protected $lang = __DIR__.'/../resources/lang';

    protected $menu = [
        'title' => '网站设置',
        'path'  => 'website-settings',
        'icon'  => 'fa-newspaper-o',
    ];
}
