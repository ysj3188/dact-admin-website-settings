<?php

namespace Dcat\Admin\Extension\WebsiteSettings\Http\Controllers;

use Dcat\Admin\Extension\WebsiteSettings\Model\Setting as Model;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Form;
use Illuminate\Routing\Controller;

class WebsiteSettingsController extends Controller
{
    public function index(Content $content)
    {
        return Form::make(new Model(), function (Form $form) {
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
            ->body(new Card(new \Dcat\Admin\Extension\WebsiteSettings\Setting()));
    }
}
