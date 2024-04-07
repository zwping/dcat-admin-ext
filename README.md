### DcatAdmin扩展开发

#### 体验demo

```bash
git clone --recurse-submodules git@github.com:zwping/dcat-admin-ext.git; \
cd dcat-admin-ext/; \
php artisan serve; 
```
> ./dcat_admin_ext.sql 恢复sql至本地db

### 截图

![main](https://raw.githubusercontent.com/zwping/dcat-admin-ext/main/screenshot/main.png)

-----


#### 扩展
| 扩展名 | 线上最新版本 | 引入版本 | 使用概述 |
| --- | --- | --- | --- |
| [zwping/operation-log](https://github.com/zwping/operation-log) | [![](https://img.shields.io/packagist/v/zwping/operation-log.svg)](https://packagist.org/packages/zwping/operation-log) | 1.0.1 | 后台操作日志 |
| [zwping/backup](https://github.com/zwping/backup) | [![](https://img.shields.io/packagist/v/zwping/backup.svg)](https://packagist.org/packages/zwping/backup) | 1.0.1 | [spatie/laravel-backup](https://github.com/spatie/laravel-backup)的管理界面 |
| [zwping/api-tester](https://github.com/zwping/api-tester) |  |  | ~~api在线测试~~ |
| [zwping/scheduling](https://github.com/zwping/scheduling) | [![](https://img.shields.io/packagist/v/zwping/scheduling.svg)](https://packagist.org/packages/zwping/scheduling) | 1.0.0 | 后台管理Laravel定时任务 |
| [zwping/dcat-media-player](https://github.com/zwping/media-player) | [![](https://img.shields.io/packagist/v/zwping/dcat-media-player.svg)](https://packagist.org/packages/zwping/dcat-media-player) | 1.0.0 | 音视频预览扩展 |
| [zwping/dcat_sys_info](https://github.com/zwping/dcat_sys_info) | [![](https://img.shields.io/packagist/v/zwping/dcat_sys_info.svg)](https://packagist.org/packages/zwping/dcat_sys_info) | 1.0.0 | 便捷展示系统&后台信息 |

#### 添加扩展本地开发
```bash
git submodule add git@github.com:zwping/media-player.git dcat-admin-extensions/zwping/media-player
```

> submodule pull最新代码
```bash
git submodule foreach --recursive "git checkout master" && git pull
```

#### 备份db
```sh
mysqldump -uroot -p12345678 skeleton_db > ./dcat_admin_ext.sql
```
