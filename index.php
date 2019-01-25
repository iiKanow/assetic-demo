<?php
require "vendor/autoload.php";
use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;
use Assetic\Filter\UglifyJs2Filter;
use Assetic\AssetManager;
use Assetic\AssetWriter;

//抽取静态文件内容
$js = new AssetCollection(
	//要处理的文件
	array(
	    new FileAsset('assets/css/404.css'),
	    new FileAsset('assets/css/aa.css'),
	),
	//文件处理方式【压缩等】
	array(),
	//源文件目录
	null,
	//var 自定义地址替换字符
	array('path')
);
//设置静态文件目录模板【由var内的字符串组合成的类似正则替换的文件目录】
$js->setTargetPath('{path}');

//创建文件管理对象
$am = new AssetManager();
//取名
$am->set('base_css', $js);
//param1 : dir 文件目录
//param2 : filename 文件名
//最终生成的文件路径：dir.'/'. 正则替换后的targetPath. filename
$writer = new AssetWriter('.', array('path'=>array('assets/css/base_development201809212230.css')));
$writer->writeManagerAssets($am);
echo '压缩公共文件成功';die;

// the code is merged when the asset is dumped
echo $js->dump();
$a = new Assetic\Asset\AssetCollection();
var_dump($a);die;

use \Andy\AuthController;
$person = new AuthController();
echo $person->test();


function x($info,$out=1){
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    if( $out ) die;
}
