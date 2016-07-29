<?php
namespace Home\Controller;
use Think\Controller;
class TomailController extends Controller{
	public function index(){
		$username = "hxj";
		$to ='h498352276@163.com';
		$subject = '欢迎注册XXX(请不要回复此邮件)';
		$content = "$username, 你好<br/>您已经成功注册为XXX用户！<br/>请点击以下链接激活此帐号：<br/><a href=\"https://www.baidu.com\"><strong>https://www.baidu.com</strong></a>";
		sendMail($to, $subject, $content);
	}
}
?>