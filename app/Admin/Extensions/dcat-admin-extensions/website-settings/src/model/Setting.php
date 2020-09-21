<?php

namespace App\Admin\Extension\WebsiteSettings\Model;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'settings';
}
