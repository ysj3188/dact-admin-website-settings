使用须知

进入项目目录

安装命令:

`composer require ysj3188/website-settings`


导入：

`php artisan admin:import Dcat\Admin\Extension\WebsiteSettings\WebsiteSettings
`

或者在网站的扩展管理中进行管理

使用前进行数据库迁移，数据库迁移文件在database目录下的migrations里，建立settings表

需要设置config/filesystems中添加别名为admin的disk，修改`config.admin.upload.disk`为`admin`,网站logo是上传至admin存储中

最后：在
`app\Providers\AppService\Provider.php`文件的`register`方法中加入如下代码

```
         $name = \Illuminate\Support\Facades\DB::table('settings')->find(1)->name;
         config([
              'admin.logo' => '<img src="/uploads/images/logo.png" width="35"> &nbsp;' . $name,
              'admin.name'=>$name
         ]);
```
