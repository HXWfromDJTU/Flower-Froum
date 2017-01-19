<?php
namespace Index\Controller;
use Think\Controller;
class ActivityController extends Controller {
	public function __construct() {
		parent::__construct();
		$this -> activityPath = new \Index\Model\ActivityModel();
		$this -> userPath = new \Index\Model\UserModel();
	}
	
	public function loadActivity() {
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> activityPath -> loadActivity();
		/*返回结果集给前端*/
		echo json_encode($resData);
	}

}
