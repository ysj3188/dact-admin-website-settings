使用须知

进入项目目录

安装命令:

`composer require ysj3188/dcat-admin-website-settings`

发布静态资源

`php artisan vendor:publish --provider=Dcat\Admin\Extension\WebsiteSettings`


导入：

`php artisan admin:import Dcat\Admin\Extension\WebsiteSettings\WebsiteSettings
`

或者在网站的扩展管理中进行管理

使用前进行数据库迁移，数据库迁移文件在database目录下的migrations里，建立settings表

需要设置config/filesystems中添加别名为admin的disk，网站logo是上传至admin存储中
