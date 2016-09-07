<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
	//加载默认视图
    public function index()
    {
		return $this->fetch();
    }
}