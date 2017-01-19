<?php
namespace Index\Controller;
use Think\Controller;
class CommentController extends Controller {
	protected $commentPath;
	public function __construct() {
		parent::__construct();
		$this -> commentPath = new \Index\Model\CommentModel();
		$this -> userPath = new \Index\Model\UserModel();
		/*初始化返回报文，默认为通信正常*/

	}
	
	

}
