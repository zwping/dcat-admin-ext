### DcatAdmin扩展开发

#### 体验demo

```bash
git clone --recurse-submodules git@github.com:zwping/dcat-admin-ext.git
cd dcat-addmin-ext &&
git submodule foreach --recursive "git checkout master"
```
git submodule add -b main git@github.com:zwping/media-player.git dcat-admin-extensions/zwping/
#### 扩展

> submodule管理扩展 ``


#### 备份db
```sh
mysqldump -uroot -p12345678 skeleton_db > ./dcat_admin_ext.sql
```
