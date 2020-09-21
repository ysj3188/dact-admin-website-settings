<?php

namespace Dcat\Admin\Extension\WebsiteSettings;

use Dcat\Admin\Widgets\Form;
use Symfony\Component\HttpFoundation\Response;

class Setting extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return Response
     */
    public function handle(array $input)
    {

        $res = Model\Setting::where('id', 1)->update($input);

        if ($res) {
            $resulf = $this->success('更新成功', '/website-settings');
        } else {
            $resulf = $this->error('更新失败', '/website-settings');
        }

        return $resulf;
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->confirm('您确定要提交表单吗', 'content');

        $this->text('name', '网站名称')->required();

        $this->url('url', '网站地址')->rules('url')->required();
        $this->image('logo', '网站logo');
        $this->editor('copyright', '网站版权')->required();
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        $res = Model\Setting::where('id', 1)->first();

        if ($res)
            return [
                'name' => $res->name,
                'url' => $res->url,
                'logo' =>$res->logo?$res->getImage() :null,
                'copyright' => $res->copyright,
            ];
        else
            return [];
    }
}
