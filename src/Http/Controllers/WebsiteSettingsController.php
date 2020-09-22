<?php

namespace Dcat\Admin\Extension\WebsiteSettings\Http\Controllers;


use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Card;
use Illuminate\Routing\Controller;

class WebsiteSettingsController extends Controller
{

    public function setting(Content $content)
    {
        return $content
            ->title('网站设置')
            ->body(new Card(new \Dcat\Admin\Extension\WebsiteSettings\Setting()));
    }
}
