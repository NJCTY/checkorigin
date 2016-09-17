<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
	//公司页面
    public function comp()
    {
    	$code = $_GET['comp'];
    	$company = Db::table('company')->where('code',$code)->find();
    	$this->assign("company",$company);
		return $this->fetch();
    }

    public function doc()
    {
		return $this->fetch();
    }
}