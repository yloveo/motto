<?php
$StartTime=microtime(true);#开始计时

#---网站/API信息
$SiteName='铅华';
$SiteURL='api.yloveo.com';
$ApiURL='api.yloveo.com';
#---数据库信息
$DatabaseHost='';#数据库地址
$DatabasePort='3306';#数据库端口
$DatabaseUsername='';#数据库用户名
$DatabasePassword='';#数据库密码
$DatabaseName='';#数据库名
$Connect=($DatabaseHost,$DatabaseUsername,$DatabasePassword,$DatabaseName,$DatabasePort);#数据库连接
#---构建数据库类

#---构建API函数类
class MOTTO{
	#---传入参数$_GET['style']
	function one($style){
		switch(){
			case 'a':
			#
			break;
			case 'b':
			#
			break;
			default:
			#
		}
	}
	#---传入参数$_GET['style']&$_GET['type']
	function two($style,$type){
		switch(){
			case 'a':
			#
			break;
			case 'b':
			#
			break;
			default:
			#
		}
	}
}
$html=<<<HTML

HTML;
echo $html;

$EndTime=microtime(true);#结束计时
?>