<?php

namespace App\Admin\Extension\WebsiteSettings;

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
        // dump($input);
        // return $this->error('Your error message.');

        $res = Model\Setting::where('id',1)->update($input);

        if ($res) {
            $resulf = $this->success('更新成功', '/setting');
        } else {
            $resulf = $this->error('更新失败', '/setting');
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
//        $this->email('email')->rules('email');
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
        return [
//            'name' => 'John Doe',
//            'email' => 'John.Doe@gmail.com',
        ];
    }
}
