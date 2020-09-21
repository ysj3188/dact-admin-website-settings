<?php

namespace Dcat\Admin\Extension\WebsiteSettings\Http\Controllers;

use App\Admin\Repositories\Setting;
use Dcat\Admin\Form;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Card;
use Illuminate\Routing\Controller;

class WebsiteSettingsController extends Controller
{
    public function index(Content $content)
    {
        return Form::make(new Setting(), function (Form $form) {
            $form->title('网站设置');

            $form->display('id');
            $form->text('name','网站名称');
            $form->text('url','网站地址');
            $form->image('logo','网站logo')->saveFullUrl();
            $form->text('copyright','版权信息');

        });

    }

    public function setting(Content $content)
    {
        return $content
            ->title('网站设置')
            ->body(new Card(new \App\Admin\Extension\WebsiteSettings\Setting()));
    }
}
