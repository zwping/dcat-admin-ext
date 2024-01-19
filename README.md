### DcatAdmin扩展开发

#### 体验demo

```bash
git clone --recurse-submodules git@github.com:zwping/dcat-admin-ext.git; \
cd dcat-admin-ext/; \
php artisan serve; 
```

#### 添加扩展
```bash
git submodule add git@github.com:zwping/media-player.git dcat-admin-extensions/zwping/media-player
```
#### 扩展
| 扩展名 | 线上最新版本 | 引入版本 | 使用概述 |
| --- | --- | --- | --- |
| [zwping/operation-log](https://github.com/zwping/operation-log) | [![](https://img.shields.io/packagist/v/zwping/operation-log.svg)](https://packagist.org/packages/zwping/operation-log) | 1.0.1 | 插件中启用, 后台显示默认菜单入口 |


> submodule pull最新代码
```bash
git submodule foreach --recursive "git checkout master" && git pull
```

#### 备份db
```sh
mysqldump -uroot -p12345678 skeleton_db > ./dcat_admin_ext.sql
```
