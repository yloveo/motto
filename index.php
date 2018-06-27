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
$DatabaseTable='';#数据表名
$Connect=mysqli_connect($DatabaseHost,$DatabaseUsername,$DatabasePassword,$DatabaseName,$DatabasePort);#数据库连接
#---构建数据库类
class DATABASE{
	#---Connect定义
	var $Connect;
	function setConnect($Connect){
		this->Connect=$Connect;
	}
	#---Sql语句自定义
	var $Sql;
	function setSql(){
		this->Sql=$Sql;
	}
	#--查询结果
	function result($Sql){
		$Result=mysqli_query($Connect,$Sql);
		$Last=mysqli_fetch_array($Result);
	}
}
#---构建API函数类
class MOTTO{
	#---传入参数$_GET['style']
	function one($style){
		switch($style){
			case 'aaaaaa':
			#
			break;
			case 'bbbbbb':
			#
			break;
			default:
			#
		}
	}
	#---传入参数$_GET['style']&$_GET['type']
	function two($style,$type){
		switch($style){
			case 'aaaaaa':
			switch($type){
				case 'aaaaa':
				#
				break;
				case 'bbbbb':
				#
				break;
				default:
				#
			}
			break;
			case 'bbbbbb':
			switch($type){
				case 'aaaaa':
				#
				break;
				case 'bbbbb':
				#
				break;
				default:
				#
			}
			break;
			default:
			switch($type){
				case 'aaaaa':
				#
				break;
				case 'bbbbb':
				#
				break;
				default:
				#
			}
		}
	}
}
#---定义网页内容
$html=<<<HTML

HTML;
#---获取GET数据
if(empty($_GET['style'])){echo $html;}else{
	if($_GET['style']!='aaaaaa'&&$_GET['style']!='bbbbbb'&&$_GET['style']!='cccccc'){echo $html;}else{
		if(empty($_GET['type'])){
			#传入参数$_GET['style']
			$Motto=new MOTTO;
			$Motto->one($_GET['style']);
		}else{
			if($_GET['type']!='aaaaa'&&$_GET['type']!='bbbbb'&&$_GET['type']!='ccccc'){echo $html;}else{
				#传入参数$_GET['style']&&$_GET['type']
				#---实例化数据库
				$Mooto
				#---实例化MOTTO
				$Motto=new MOTTO;
				$Motto->two($_GET['style'],$_GET['type']):
			}
		}
	}
}


$EndTime=microtime(true);#结束计时
?>