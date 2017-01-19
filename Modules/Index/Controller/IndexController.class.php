<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
	/*页面展示+跳转关系*/
	public function index() {
		$this -> display('index');
	}

}
