<?php

namespace Dcat\Admin\Extension\WebsiteSettings\Model;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'settings';
    protected $fillable  = ['name','logo','url','copyright'];


    // 定义一个public方法访问图片或文件
    public function getImage()
    {
        if (Str::contains($this->logo, '//')) {
            return $this->logo;
        }

        return Storage::disk('admin')->url($this->logo);
    }

}
