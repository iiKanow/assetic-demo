# assetic

### kriswallsmith/assetic 安装
> 编辑composer.json
```
{
    "require": {
        "kriswallsmith/assetic": "^1.4"
    }
}
```
执行
> composer install 安装assetic

在调用文件，使用composer自动加载
> requeire "vendor/autoload.php";

根据需要调用assetic的类

- AssetCollection 数据抽取
- FileAsset/GlobAsset
- UglifyJs2Filter js压缩
- UglifyCss2Filter css压缩
- AssetManager 文件管理
- AssetWriter 文件写入

### 文件写入，注意var, targetPath, dir, filename的设置
详情查看index.php

